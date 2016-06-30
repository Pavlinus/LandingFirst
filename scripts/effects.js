$(document).ready(function() {

  // Индикатор анимации окна об авторе
  var aboutAnimPlayed = false;

  // Интервалы между переходами в окне схема работы
  var stepsInterval;
  var stepNum = 0;

  window.onblur = stopStepsAnimation;
  window.onfocus = startStepsAnimation;

  $("menu li a").click(function() {
    scrollByNav = true;

    $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top + 1 + "px"},{
        duration: 500
      });
  });


  $("#price .box3").hover(
    function() {
      $(this).css({'transform':'translateY(-3%)'});
    },
    function() {
      $(this).css({'transform':'translateY(0%)'});
    }
  );


  //scrollWhenReady();
  hideElements();
  startStepsAnimation();

  //Прокрутка к началу после загузки
  function scrollWhenReady()
  {

    $("html, body").animate({
      scrollTop: $("#main").offset().top + "px"},{
      duration: 1500
    });
  }


  // Скрывает элементы окна услуг
  function hideElements()
  {
    $("#services div.left").css({'transform':'translateX(-100%)'});
    $("#services div.right").css({'transform':'translateX(100%)'});
    $("#services .box2").css({'opacity':'0'});
  }


  // Анимация окна сервисов
  function showServices(scroll, animStart, animEnd)
  {
    var servicesBoxWidth = $("#services .box2").first().width();
    var animLen = animEnd - animStart;
    var offset = (animEnd - scroll) * 100 / animLen;
    var opacity = (100 - offset) / 100;

    $("#services .box2").css({'opacity':opacity});
    $("#services div.left").css({'transform':'translateX(-'+ offset+'%)'});
    $("#services div.right").css({'transform':'translateX('+ offset+'%)'});
  }


  // Анимация окна об авторе
  function animateAbout()
  {
    $("#read").animate({scale: 1.2},{duration: 500})
      .animate({scale: 1},{duration: 500});
  }


  // Обработка проматывания
  window.onscroll = function() {
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;

    // Услуги
    var servicesAnimStart = $("#main").offset().top;
    var servicesAnimEnd = $("#services").offset().top;

    // Анимация окна услуг
    if(scrolled >= servicesAnimStart && scrolled <= servicesAnimEnd)
    {
      showServices(scrolled, servicesAnimStart, servicesAnimEnd);
    }

    // Об авторе
    var aboutAnimStart = $("#about").offset().top;
    var aboutHeight = $("#about").height();

    // Анимация окна об авторе
    if(scrolled >= aboutAnimStart
        && scrolled < aboutAnimStart + aboutHeight
        && !aboutAnimPlayed)
    {
      animateAbout();
      aboutAnimPlayed = true;
    }
    else if(scrolled < aboutAnimStart
        || scrolled > aboutAnimStart + aboutHeight)
    {
      aboutAnimPlayed = false;
    }
  }


  // Запускает анимацию шагов окна схема работы
  function startStepsAnimation()
  {
    stopStepsAnimation();
    stepsInterval = setInterval(function() {
        animateSteps()
      },
      3000
    );
  }


  // Останавливает анимацию шагов окна схема работы
  function stopStepsAnimation()
  {
    window.clearInterval(stepsInterval);
  }


  // Анимация шагов окна схема работы
  function animateSteps()
  {
    var nextStep = 0;

    if(stepNum < 3)
    {
      nextStep = stepNum + 1;
    }

    $.each($("div.step h4"), function(i) {
      if(i == stepNum)
      {
        $(this).switchClass('active', 'notActive', 500, "linear");
      }

      if(i == nextStep)
      {
        $(this).switchClass('notActive', 'active', 500, "linear");
      }
    });

    if(stepNum == 3)
    {
      stepNum = 0;
    }
    else
    {
      stepNum += 1;
    }
  }
});
