function show()   /* Функция происходит при нажатии на кнопку стартовой страницы */
      {
          $.ajax({
              url: "scripts/engine.php",
              cache: false,
              success: function(html){
                  $(".main-block").html(html);
              }
          });
      }

      $(document).ready(function(){
        $("#click").click(function(){
          show();
        });
      });

  function select_engine() /* Ф-ция происходит при выборе двигателей  */
              {
                $.ajax({
                    url: "scripts/test.php",
                    cache: false,
                    success: function(html){
                        $(".main-block").html(html);
                    }
                });
            }

            $(document).ready(function(){
              $("#minarelli-h, #minarelli-v, #3kj, #hiper, #af18, #af34, #morini, #bigblock").click(function(){
                select_engine();
              });
            });

  function tuning() /* Функция происходит при выборе "для чего нужен тюнинг" */
    {
      $.ajax({
          url: "scripts/test-2(db).php",
          cache: false,
          success: function(html){
              $(".main-block").html(html);
            }
          });
        }

        $(document).ready(function(){
          $("#stunt, #kolco").click(function(){
            tuning();
    });
  });
