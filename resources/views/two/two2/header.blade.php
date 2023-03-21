<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Snippet - BBBootstrap</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

      :root {
        --header-height: 3rem;
        --nav-width: 68px;
        --first-color: #4723d9;
        --first-color-light: #afa5d9;
        --white-color: #f7f6fb;
        --body-font: "Nunito", sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100;
        
      }

      *,
      ::before,
      ::after {
        box-sizing:border-box;
      }

      body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: 0.5s;
        /* overflow: scroll; */
       
      }

      a {
        text-decoration: none;
        /* overflow: scroll; */
      }

      .header {
        width: 95%;
        background: #000;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 6rem;
        /* right: 10rem; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: 0.5s;
      }

      .header_toggle {
        color: black;
        font-size: 1.5rem;
        cursor: pointer;
      }

      .header_img {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden;
      }

      .header_img img {
        width: 40px;
      }

      .l-navbar {
        position: fixed;
        top: 0; 
        left: -30%;
        max-width: 12rem; 
         /* width: var(--nav-width);  */
        height: 150vh;
        background-color: var(--first-color);
       /* padding: 0.5rem 1rem 0 0;  */
        transition: 0.5s; 
         z-index: var(--z-fixed); 
         
         /* overflow-y: scroll; */
        
      }
      /* ::-webkit-scrollbar{

        width: 20rem;
      }
      ::-webkit-scrollbar-track{

        background-color: red;
      } */


      .nav {
        height: 300%;
        display: flex;
        flex-direction: row;
         justify-content: space-between; 
        
      }

      .nav_logo,
      .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        /* column-gap: 1rem; */
        /* padding: 0.5rem 0 0.5rem 1.5rem; */
        /* overflow: scroll; */
       
      }

      .nav_logo {
        /* margin-left: 10rem;   */
        margin-bottom: 2rem;
        /* padding-left: 0rem;  */
        font-size: 1.25rem;
        color: var(--white-color);
        padding: auto;
        /* overflow: scroll; */
      }

      .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color);
        padding: auto;
        /* overflow: scroll; */
      }

      .nav_logo-name {
        color: var(--white-color);
        font-weight: 100;
        font-size: 1.2rem;
       
      }
      .align-text-bottom{
        color: aqua;
        /* margin-left: 3rem; */
      }

      .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: 0.3s;
        align-content: bottom;
        /* overflow-y: scroll; */
          
      }

       .nav_link:hover {
        color: var(--white-color);
        /* overflow-y: scroll;
          overflow: hidden; */

      } 

      .nav_icon {
        /* font-size: 1.25rem; */
       /* color: aliceblue;
       padding: 0rem; */
       font-size: 1.25rem;
        color: var(--white-color);
        padding: auto;
        margin-left: 0.1rem;
        /* overflow: scroll; */
      }
      .nav_1icon{
        font-size: 1.25rem;
        color: var(--white-color);
        padding: auto;
        margin-left: 1rem;
      }

      .show {
        left: 0;
       
      }

      .body-pd {
       
        /* overflow: scroll; */
        padding-left: calc(var(--nav-width) + 1rem); 
       margin-left: 0rem;
       /* overflow-y: scroll; */
      }

      .active {
        color: var(--white-color);
        /* overflow-y: scroll; */
      }

      .active::before {
        content: "";
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color);
      }

       .height-100 { 
        margin-left: 10rem;
        padding-left: 1rem;
        margin-top: 0rem;
        /* overflow: scroll; */
       
       } 

       @media screen and (min-width: 768px) {
        body {
            margin: calc(var(--header-height) + 1rem) 0 0 0;
          padding-left: calc(var(--nav-width) + 6rem);
          
         

        }
        }
    

        .header {
          height: calc(var(--header-height) + 1rem);
          padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
        }

        .header_img {
            width: 90px;
        height: 50px;
         background-color: #000;
         

        }
        
        

        .header_img img {
          width: 45px;
        }

        .l-navbar {
          left: 0; 
          padding: 1rem 1rem 0 0; 
          /* overflow-y: scroll;
          overflow: hidden; */
        }
        .nav-item{
text-decoration-color: black;

        }
       
        .show {
          width: calc(var(--nav-width) + 156px);
          /* overflow-y: scroll;
          overflow: hidden; */
        }

        .body-pd {

          padding-left: calc(var(--nav-width) + 188px);
          /* overflow-y: scroll;
          overflow: hidden; */
          margin-left: 0rem;
        }
      
    </style>
  </head>
  <body id="body-pd">
    <header class="header bg-danger" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle">"Tooday a reader,tomorrow a leader"    </i>
        
        <h3></h3>
        <div>
        
        </div>
      </div>
      <div class="header_img">
      <a class="nav-link px-100 " style="color:aqua;" href="{{route('logout')}}">logout</a>
      </div>


    </header>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function (event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
          const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

          // Validate that all variables exist
          if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
              // show navbar
              nav.classList.toggle("show");
              // change icon
              toggle.classList.toggle("bx-x");
              // add padding to body
              bodypd.classList.toggle("body-pd");
              // add padding to header
              headerpd.classList.toggle("body-pd");
            });
          }
        };

        showNavbar("header-toggle", "nav-bar", "body-pd", "header");

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll(".nav_link");

        function colorLink() {
          if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
          }
        }
        linkColor.forEach((l) => l.addEventListener("click", colorLink));

        // Your code to run since DOM is loaded and ready
      });
    </script>
  </body>
</html>
