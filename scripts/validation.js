$(document).ready(function() {
  $("#header input[type='submit']").click(function() {

    if(hasEmptyFields('#header'))
    {
      return false;
    }
  });

  $("#contacts input[type='submit']").click(function() {

    if(hasEmptyFields('#contacts'))
    {
      return false;
    }
  });

  function hasEmptyFields(parent)
  {
    var hasEmpty = false;

    $.each( $(parent + " input.require"), function() {
      if($(this).val() == '')
      {
        $(this).parent().animate({backgroundColor:'#ffbb42'}, {duration: 300})
          .delay(600).animate({backgroundColor:'#fff'}, {duration: 200});
        hasEmpty = true;
      }
      else
      {
        $(this).parent().removeClass('empty');
      }
    });

    return hasEmpty;
  }
});
