</div> <!-- container -->
<footer class="text-center text-light py-4 poppins" style="background-color: #263238;">
  <small>&copy;copyright 2022 - 2023 E-Konseling - Website </div>
    <script>
      AOS.init();


      const loader = document.getElementById('loader');

      window.addEventListener('load', function() {
        loader.classList.replace('d-flex', 'd-none');
      });


      const toggleMenu = document.getElementById('toggleMenu');
      const navbarMenu = document.getElementById('headerMenu');
      const btnMenuColor = document.querySelector('.fa-bars');
      toggleMenu.addEventListener('click', function() {
        navbarMenu.classList.toggle('bg-light');
        btnMenuColor.classList.toggle('text-dark');
      });

      function headerBgTransparent() {
        const top = document.getElementById("headerMenu");
        const links = document.querySelector('.text-lg-light');
        const btnMenuColor = document.querySelector('.fa-bars');

        btnMenuColor.classList.replace('text-dark', 'text-white');
        top.classList.remove('bg-white');
        links.classList.replace('text-dark', 'text-lg-light');
      }

      function headerBgWhite() {
        const top = document.getElementById("headerMenu");
        const links = document.querySelector('.text-lg-light');
        const btnMenuColor = document.querySelector('.fa-bars');

        btnMenuColor.classList.replace('text-white', 'text-dark');
        top.classList.add('bg-white');
        links.classList.add('text-dark');
      }

      function headerBorder() {
        const bord = document.getElementById("headerMenu");
        bord.classList.add('xv-bg-header-border');
      }

      function headerNoBorder() {
        const bord = document.getElementById("headerMenu");
        bord.classList.remove('xv-bg-header-border');
      }
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {

          headerBgWhite();

          if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {

            headerBorder();

          } else {
            headerNoBorder();

          }

        } else {

          headerBgTransparent();
        }
      }
    </script>





    </body>

    </html>