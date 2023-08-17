// 
(function ($) {
  $.fn.multiImageUploader = function (options) {
    var settings = $.extend(
      {
        // Default settings
        uploadUrl: '',
        maxImages: 7,
        maxFileSize: 5242880, // 5MB
        allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
        onUpload: function (file) {},
        onRemove: function (fileIndex) {},
        onError: function (errorMessage) {},
      },
      options
    );

    var selectedImages = []; // Array to store selected images
    var $previewContainer = $("#preview-container"); // Cache the preview container element

    // Function to get the selected images
    this.getSelectedImages = function () {
      return selectedImages;
    };

    // Private function to format file size
    function formatSize(bytes) {
      var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
      if (bytes == 0) return '0 Bytes';
      var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
      return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }

    function validateImage(file) {
      var fileName = file.name;
      var fileExtension = fileName.split('.').pop().toLowerCase();
      var fileSize = file.size;

      if ($.inArray(fileExtension, settings.allowedExtensions) === -1) {
        settings.onError('Invalid file type: ' + fileExtension);
        return false;
      }

      if (fileSize > settings.maxFileSize) {
        settings.onError('File size exceeds the limit.');
        return false;
      }

      return true;
    }

    return this.each(function () {
      var $this = $(this);

      $this.on('change', function (e) {
        var files = e.target.files;
        var totalFiles = files.length;

        if (selectedImages.length + totalFiles > settings.maxImages) {
          settings.onError('Maximum ' + settings.maxImages + ' images allowed.');
          return;
        }

        for (var i = 0; i < totalFiles; i++) {
          var file = files[i];

          if (!validateImage(file)) {
            continue;
          }

          var fileName = file.name;

          if (selectedImages.some(function (image) { return image.name === fileName; })) {
            settings.onError("Image already selected: " + fileName);
            continue;
          }

          var reader = new FileReader();
          reader.onload = (function (file) {
            return function (e) {
              var imageObject = {
                name: file.name,
                size: file.size,
                imageData: e.target.result,
              };
              selectedImages.push(imageObject);

              var $imageContainer = $('<div class="image-container"></div>');
              var $previewImage = $('<img src="' + imageObject.imageData + '" alt="' + file.name + '">');
              var $removeButton = $('<button class="remove-button">Remove</button>');

              $previewImage.appendTo($imageContainer);
              $removeButton.appendTo($imageContainer);
              $('<strong>' + file.name + '</strong>').appendTo($imageContainer);
              $('<div>' + formatSize(file.size) + '</div>').appendTo($imageContainer);
              $imageContainer.appendTo($previewContainer);

              $removeButton.on('click', function () {
                $imageContainer.remove();
                var index = selectedImages.findIndex(function (image) { return image.name === file.name; });
                if (index !== -1) {
                  selectedImages.splice(index, 1); // Remove image from the selectedImages array
                  settings.onRemove(index);
                }
              });

              settings.onUpload(file);
            };
          })(file);

          reader.readAsDataURL(file);
        }
      });
    });
  };
})(jQuery);
