<script type="text/javascript">
	function createSwal($options) {
    swal({
      title: $options['title'],
      text: $options['msg'],
      type: $options['type'],
      showCancelButton: $options['show_cancel'],
      confirmButtonColor: $options['btn_color'],
      confirmButtonText: $options['btn_text'],
      confirmButtonClass: $options['btn_class']
    }).then((result) => {
   
    }); 

    return $options; 
  }

  function validateImgProperties($image) {
    let $error_type = '';

    if (jQuery.inArray($image['extension'], ['gif','png','jpg','jpeg']) == -1) {
      $error_type = 'extension';
    } else if ($image['size'] > 2000000) {
      $error_type = 'size';
    }
    
    return $error_type;   
  }

  function generateSwalOptions($options) {
    $data = {
      title: $options['title'],
      message: $options['message'],
      type: $options['type'],
      show_cancel: false,
      btn_color: "#5cb85c",
      btn_text: '<span class="glyphicon glyphicon-ok"></span>&nbspProceed',
      btn_class: "btn"
    };

    return $data;  
  }

  function generateErrorMsg(error_type) {
    let $options = {};
    switch (error_type)
    {
      case 'extension':
          $options['title'] = "Invalid File Type!";
          $options['msg'] = "Image must be in 'gif','png','jpg','jpeg' format!";
          $options['type'] = "error";
          $options['is_valid'] = false;
          break;
      case 'size':
          $options['title'] = "Invalid File Size!"
          $options['msg'] = "Please select an image with size lower than 2MB!";
          $options['type'] = "error";
          $options['is_valid'] = false;
          break;    
    }

    return $options;
  } 

  function renderImage($element, $file) {
    let obj = new FileReader();
    obj.onload = function(data) {
      $element.attr('src', data.target.result); 
    }
    obj.readAsDataURL($file);

    return obj;
  }
</script>