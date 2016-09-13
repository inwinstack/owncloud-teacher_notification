function show15gbnotification(){
  $.colorbox({
    opacity:0.4, 
    transition:"elastic", 
    speed:100, 
    width:"70%", 
    height:"18%", 
    href: OC.filePath('teacher_notification', '', 'notification.php'),
    onClosed : function(){
      $.ajax({
        method: 'POST',
        url: OC.generateUrl('/apps/teacher_notification/set'),
        data: {
          value: false,
        }
      });
    }  
  });
}
