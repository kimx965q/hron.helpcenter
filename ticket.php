<?php include 'includes/header2.php'; ?>

<!------------main--------------->

    <section class="breadcrumbs-container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="index.php" class="breadcrumbs-link">Home</a>
            </li>
            <li class="breadcrumbs-item">
                <a href="ticket.php" class="breadcrumbs-link breadcrumbs-link-active">Support ticket</a>
            </li>
        </ul>
    </section>

    <section class="form">
        <div class="form-intro">
            <h1>Opret support ticket</h1>
        <p class="txt">Udfyld formularen herunder,
             så vender vi tilbage med et svar til din e-mail 
             hurtigst muligt. 
        </p>
        </div>
        

        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Hvad kan vi hjælpe dig med? *</span>
                    <input type="text" placeholder="Skriv here..." required>
                </div>
                <div class="input-box">
                    <span class="details">E-mail adresse</span>
                    <input type="text" placeholder="Skriv here..." required>
                </div>
                <div class="input-box">
                    <span class="details">For- og efternavn</span>
                    <input type="text" placeholder="Skriv here..." required>
                </div>
                <div class="input-box">
                    <span class="details">Virksomhed</span>
                    <input type="text" placeholder="Skriv here..." required>
                </div>
                <div class="input-box2">
                    <span class="details">Beskriv din henvendelse *</span>
                    <input type="text" placeholder="Skriv here..." required>
                </div>
            </div>

            <div class="form-btn">
                <input type="submit" value="Indsend">
            </div>
        </form>



    

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


