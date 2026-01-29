<?php include  'header.php'; ?>

<section id="profile">
        <div class="section__pic-container">
            <img src="./assets/profilepic.jpg" alt="Sharon's profile picture"/>
        </div>

        <div class="section__text">
            <p class="section__text__p1">I'm</p>
            <h1 class="title">Sharon Kadamandla</h1>
            <p class="section__text__p2">Software Developer</p>
            <div class="btn-container">
              <button
                class="btn btn-color-2"
                onclick="window.open('./assets/resume.pdf')"
              >
                Resume
              </button>
              <button class="btn btn-color-1" onclick="location.href='./#contact'">
                Contact Info
              </button>
            </div>
            <div id="socials-container">
              <img
                src="./assets/linkedin.png"
                alt="My LinkedIn profile"
                class="socials-icon"
                onclick="location.href='https://www.linkedin.com/in/sharonkadamandla/'"
              />
              <img
                src="./assets/github.png"
                alt="My Github profile"
                class="socials-icon"
                onclick="location.href='https://github.com/sharonkadamandla'"
              />
              <img
                src="./assets/cross.png"
                alt="Faith Statement"
                class="socials-icon"
                onclick="location.href='faithstatement.php'"
              />
            </div>
        </div>
        
    </section>

    <section id="reviews">
        <p class="section__text__p1">It's weird to talk about myself. Let this cool people do it for me!</p>
        <h1 class="title">Reviews</h1>
        
        
          <!-- Slideshow container -->
          <div class="slideshow-container">

            <!-- Each slide has a solid background and text that can be customized -->
            <div class="mySlides fade bg1">
              <div class="slide-content">
                "Sharon built a new website for Harmony Road Baptist Church using Wix and designed it to be functional and elegant, 
                while still being easily maintained by users with limited technical ability. 
                She was always collaborative through the building process, proposing ideas that fit within our vision, 
                making detailed changes based on feedback, and suggesting unique solutions to problems." </br> — Nathan L

              </div>
            </div>

            <div class="mySlides fade bg1">
              <div class="slide-content">
                "I had an excellent experience working with Sharon, on the Millennial’s Career Hub website. 
                She followed every instruction with precision, paid close attention to detail, and translated my vision exactly as I had imagined it. 
                Her professionalism, responsiveness, and ability to execute feedback efficiently truly stood out. 
                The final website exceeded my expectations, both in functionality and design. 
                I would highly recommend her to anyone looking for a reliable and skilled website developer." </br> - Disha M
              </div>
            </div>

            <div class="mySlides fade bg1">
              <div class="slide-content">
                "I had the pleasure of working with Sharon at Virtusa, where she was an outstanding Software Engineer with strong expertise in Java and Python.
                 She took complete ownership of her module, which made collaboration seamless and highly efficient. 
                 Sharon consistently delivered clean, reliable code and approached every task with a strong sense of responsibility. 
                 She was always the first to offer support. 
                I highly recommend Sharon for any engineering role." </br> — Dhanush S
              </div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>

        
    </section>

    

    <section id="experience">
        <p class="section__text__p1">Explore My</p>
        <h1 class="title">Skills</h1>

        <div class="experience-details-container">
          <div class="about-containers">
            <div class="details-container">
              <h2 class="experience-sub-title">Languages / Frontend</h2>

              <div class="article-container">
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>Java</h3>
                    <p>Experienced</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>Python</h3>
                    <p>Experienced</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>XML</h3>
                    <p>Intermediate</p>
                  </div>
                </article>
                <article>
                    <img
                      src="./assets/checkmark.png"
                      alt="Experience icon"
                      class="icon"
                    />
                    <div>
                      <h3>C++</h3>
                      <p>Intermediate</p>
                    </div>
                </article>
                <article>
                    <img
                      src="./assets/checkmark.png"
                      alt="Experience icon"
                      class="icon"
                    />
                    <div>
                      <h3>SQL</h3>
                      <p>Experienced</p>
                    </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>JavaScript</h3>
                    <p>Basic</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>HTML</h3>
                    <p>Intermediate</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>CSS</h3>
                    <p>Intermediate</p>
                  </div>
                </article>
              </div>
            </div>

            <div class="details-container">
              <h2 class="experience-sub-title">FrameWorks / Tools / Technologies</h2>
              <div class="article-container">
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>Design Patterns</h3>
                    <p>Basic</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>Dockers</h3>
                    <p>Intermediate</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>Data Structures</h3>
                    <p>Intermediate</p>
                  </div>
                </article>
                <article>
                  <img
                    src="./assets/checkmark.png"
                    alt="Experience icon"
                    class="icon"
                  />
                  <div>
                    <h3>Git</h3>
                    <p>Intermediate</p>
                  </div>
                </article>
              </div>
              
            </div>
          </div>
        </div>
        
    </section>

    <section id="project">
        <p class="section__text__p1">Checkout</p>
        <h1 class="title">My Latest Projects</h1>

        <div class="project-details-container">
          <div class="project-containers">
            

            <div class="details-container color-container">
              <img src="./assets/portfolio.png" alt="Portfolio project" class="project-img" />
              <p>A responsive personal portfolio website showcasing my skills and projects. Built with HTML, CSS, and JavaScript to create an interactive and visually appealing design with smooth navigation and modern styling.</p>
              <div class="btn-container">
                <button
                  class="btn btn-color-2 project-btn"
                  onclick="location.href='https://github.com/sharonkadamandla/portfolio'"
                >
                  Github
                </button>
              </div>
            </div>

            <div class="details-container color-container">
              <img src="./assets/mch.png" alt="Millennial's Career Hub" class="project-img" />
              <p>A professional career development platform designed to help millennials navigate their career path. This website provides resources, mentorship opportunities, and networking features to support career growth and professional development.</p>
              <div class="btn-container">
                <button
                  class="btn btn-color-2 project-btn"
                  onclick="location.href='https://www.millennialscareerhub.ca'"
                >
                  Website
                </button>
              </div>
            </div>
          
          </div>
        </div>

        
    </section>

<!-- Contact Section -->
    <section id="contact">
        <p class="section__text__p1">Get in Touch</p>
        <h1 class="title">Contact Me</h1>
        <div class="contact-info-upper-container">
          <div class="contact-info-container">
            <img
              src="./assets/email.png"
              alt="Email icon"
              class="icon contact-icon email-icon"
            />
            <p><a href="mailto:sharon.kadamandla@gmail.com">sharon.kadamandla@gmail.com</a></p>
          </div>
          <div class="contact-info-container">
            <img
              src="./assets/linkedin.png"
              alt="LinkedIn icon"
              class="icon contact-icon"
            />
            <p><a href="https://www.linkedin.com/in/sharonkadamandla/">LinkedIn</a></p>
          </div>
        </div>
      </section>
      <?php include  'footer.php'; ?>