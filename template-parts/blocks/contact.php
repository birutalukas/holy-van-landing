<section id="contact" class="contact">
    <div class="container">
        <?php if ( $contact_title = get_field('contact_title') ) : ?>
            <h2 class="contact__section-heading slide-up"><?= $contact_title; ?></h2>
        <?php endif; ?>

        <?php if ( $contact_descr = get_field('contact_description') ) : ?>
            <div class="slide-up">
                <?= $contact_descr; ?>
            </div>
        <?php endif; ?>
        
    </div>
    <div class="flex-container contact__forms">
        <div class="content--left">
            <form action="/" method="POST" id="Resta-aggiornato">
                <div class="form__title">
                    <h3>
                        Resta aggiornato
                    </h3>
                </div>
                <div class="form__row">
                    <input type="text" name="Name" id="Name" placeholder="Nome e Cognome">
                </div>
                <div class="form__row">
                    <label for="Possiedi-un-van">Possiedi un van?<span>*</span></label>
                    <select name="Possiedi-un-van" id="Possiedi-un-van">
                        <option>Si</option>
                        <option>Nej</option>
                    </select>
                </div>
                <div class="form__row">
                    <input type="email" name="Email" id="Email" placeholder="E-mail">
                </div>
                <div class="form__row--acceptance">
                    <input type="checkbox" name="Privacy-Policy-Resta" id="Privacy-Policy-Resta">
                    <label for="Privacy-Policy-Resta">Sottoscrivo la Privacy Policy.<span>*</span></label>
                </div>
                <div class="form__row">
                    <input type="submit" value="Invia">
                </div>
            </form>
        </div>
        <div class="content--right">
            <form action="/" method="POST" id="Lavora-con-noi">
                <div class="form__title">
                    <h3>
                        Lavora con noi
                    </h3>
                </div>
                <div class="form__row">
                    <input type="text" name="Name" id="Name" placeholder="Nome e Cognome">
                </div>
                <div class="form__row">
                    <input type="tel" name="Telefono" id="Telefono" placeholder="Telefono">
                </div>
                <div class="form__row">
                    <input type="email" name="Email" id="Email" placeholder="E-mail">
                </div>
                <div class="form__row">
                    <label for="Possiedi-un-van">Come potresti aiutarci?<span>*</span></label>
                    <select name="Possiedi-un-van" id="Possiedi-un-van">
                        <option>Ambasador</option>
                        <option>Content Creator</option>
                        <option>Alpha tester</option>
                    </select>
                </div>
                <div class="form__row">
                    <label for="message">Raccontaci di te<span>*</span></label>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>
                <div class="form__row--acceptance">
                    <input type="checkbox" name="Privacy-Policy-Lavora" id="Privacy-Policy-Lavora">
                    <label for="Privacy-Policy-Lavora">Sottoscrivo la Privacy Policy.<span>*</span></label>
                </div>
                <div class="form__row">
                    <input type="submit" value="Invia">
                </div>
            </form>
        </div>
    </div>

</section>
