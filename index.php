

<!------------header--------------->

<?php include 'includes/header.php'; ?>



<!------------main--------------->


    <section class="search-container">
        <div class="search-input">
            <div class="icon"><i class="fas fa-search"></i></div>
            <input type="text" placeholder="Søg...">
        </div>
    </section>

    <section class="categories-container">
        <h1>Kategorier</h1>
        <p>Amet minim mollit non deserunt ullamco est sit
            aliqua dolor do amet sint. Velit officia consequat... </p>

        <div class="box-links">
            <a class="box" href="#kgi">
                <div class="left">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Kom godt igang</h3>
                </div>

                <div class="icon2"><i class="fas fa-chevron-right"></i></div>
            </a>

            <a class="box" href="#guides">
                <div class="left">
                    <div class="icon"><i class="fas fa-book"></i></div>
                    <h3>Guides</h3>
                </div>

                <div class="icon2"><i class="fas fa-chevron-right"></i></div>
            </a>

            <a class="box" href="#faq">
                <div class="left">
                    <div class="icon"><i class="far fa-question-circle"></i></div>
                    <h3>FAQs</h3>
                </div>

                <div class="icon2"><i class="fas fa-chevron-right"></i></div>
            </a>
        </div>
    </section>

    <section class="kgi-container" id="kgi">

        <div class="intro">
            <h1>Kom godt igang</h1>
            <p>Amet minim mollit non deserunt ullamco est sit
                aliqua dolor do amet sint. Velit officia consequat...</p>
        </div>

        <div>
            <a href="velkommen.php">
                <div class="article-box">
                    <h4>Velkommen</h4>
                    <div class="icon2"><i class="fas fa-chevron-right"></i></div>
                </div>
            </a>

            <a href="indstillinger.php">
                <div class="article-box">
                    <h4>Instillinger</h4>
                    <div class="icon2"><i class="fas fa-chevron-right"></i></div>
                </div>
            </a>

            <a href="virksomheden.php">
                <div class="article-box">
                    <h4>Virksomheden</h4>
                    <div class="icon2"><i class="fas fa-chevron-right"></i></div>
                </div>
            </a>

        </div>
    </section>

    <section class="guides-container" id="guides">

        <div class="intro">
            <h1>Guides</h1>
            <p>Amet minim mollit non deserunt ullamco est sit
                aliqua dolor do amet sint. Velit officia consequat...</p>
        </div>

        <div>
            <a href="#">
                <div class="article-box">
                    <h4>Opsætning af </h4>
                    <div class="icon2"><i class="fas fa-chevron-right"></i></div>
                </div>
            </a>

            <a href="#">
                <div class="article-box">
                    <h4>Tilføj ny medarbeder</h4>
                    <div class="icon2"><i class="fas fa-chevron-right"></i></div>
                </div>
            </a>
        </div>
    </section>

    <section class="faqs-container" id="faq">

        <div class="faq-content">

            <div class="intro">
                <h1>FAQs</h1>
                <p>Amet minim mollit non deserunt ullamco est sit
                    aliqua dolor do amet sint. Velit officia consequat...</p>
            </div>



            <div class="accordion">
                <div class="accordion-item" id="question1">
                    <a class="accordion-link" href="#question1">
                        How often do you go to the beach?
                        <div class="icon-add"><i class="fas fa-plus"></i></div>
                        <div class="icon-remove"><i class="fas fa-minus"></i></div>
                    </a>
                    <div class="answer">
                        <p>Amet minim mollit non deserunt ullamco est sit
                            aliqua dolor do amet sint. Velit officia consequat...</p>

                    </div>
                </div>

                <div class="accordion-item" id="question2">
                    <a class="accordion-link" href="#question2">
                        Is the earth ?
                        <div class="icon-add"><i class="fas fa-plus"></i></div>
                        <div class="icon-remove"><i class="fas fa-minus"></i></div>

                    </a>
                    <div class="answer">
                        <p>Amet minim mollit non deserunt ullamco est sit
                            aliqua dolor do amet sint. Velit officia consequat...</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">

        <div class="contact-resp">

            <div class="intro">
                <h1>Kontakt os</h1>
                <p>Amet minim mollit non deserunt ullamco est sit
                    aliqua dolor do amet sint. Velit officia consequat...</p>
            </div>


            <div class="open-time">
                <div class="heading">
                    <div class="icon-phone"><i class="far fa-clock"></i></div>
                    <h3>Support åbningstider</h3>
                </div>
    
                <div class="weekdays">
                    <p class="description">Hverdage</p>
                    <p class="subject">09:00 - 15:00</p>
                </div>
                <div class="weekends">
                    <p class="description">Weekender</p>
                    <p class="subject">Lukket</p>
                </div>
                <div class="holidays">
                    <p class="description">Helligdage</p>
                    <p class="subject">Lukket</p>
                </div>
    
            </div>

        </div>

        <div class="contact-resp2">
            <div class="contact-box">
                <div class="heading">
                    <div class="icon-phone"><i class="fas fa-phone-alt"></i></div>
                    <h3>Giv os et opkald</h3>
                </div>
                <div class="supp">
                    <p class="description">Support afdeling:</p>
                    <p class="subject">+45 71 99 07 66</p>
                </div>
                <div class="sale">
                    <p class="description">Salgs afdeling:</p>
                    <p class="subject">+45 71 99 07 27</p>
                </div>
    
            </div>
    
            <div class="contact-box">
                <div class="heading">
                    <div class="icon-phone"><i class="far fa-envelope"></i></div>
                    <h3>Send os en mail</h3>
                </div>
                <div class="supp">
                    <p class="description">Support afdeling:</p>
                    <p class="subject">support@hr-on.com</p>
                </div>
                <div class="sale">
                    <p class="description">Salgs afdeling:</p>
                    <p class="subject">sales@hr-on.com</p>
                </div>
    
            </div>
        </div>


    </section>

   <!------------footer--------------->

<?php include 'includes/footer.php'; ?>
