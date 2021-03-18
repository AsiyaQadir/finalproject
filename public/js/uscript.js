let menu_toggle_btn=false;

function menu_toggle(){
  if(menu_toggle_btn){
    menu_toggle_btn=false;
    // $(document).ready(function(){
      $("#ham_burger").click(function(){
        $(".dashboard_main").css("grid-template-columns","80px auto");
        $(".dashboard_main .brand").css("display","none");
        $(".dashboard_main a:first-child").css("padding-right","15px");
        $(".dashboard_main #menu").css("display","none");
        $(".btnMenu i").css("margin-left","5px");
      });
    // });
  }else{
    menu_toggle_btn=true;
    // $(document).ready(function(){
      $("#ham_burger").click(function(){
        $(".dashboard_main").css("grid-template-columns","250px auto");
        $(".dashboard_main .brand").css("display","inline-block");
        $(".dashboard_main #menu").css("display","inline-block");
        $(".btnMenu i").css("margin-left","60px");
      });
    // });
  }
}


function btnNotificationMessage(){
  $(".list_box i").click(function(){
    $(this).removeClass("fa-envelope");
    $(this).addClass("fa-envelope-open");
  })
  // console.log("click")
}