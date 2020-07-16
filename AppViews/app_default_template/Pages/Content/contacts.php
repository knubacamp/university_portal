<!-- ++++ contact form design ++++ -->
<section class="common-form-section contact-form-wrapper mt-4">
    <div class="container wblock1 p-4">
        <!--end section title -->
        <div class="row">
            <div class="col-md-7">
                <div class="customise-form contact-form clearfix">
                    <form class="contacts_form" method="post">
                        <h3><?=$t->get('contact_us_h3');?></h3>

                        <div class="form-group customised-formgroup"> <span class="icon-user"></span>
                            <input type="text" name="name" class="name form-control" placeholder="<?=$t->get('name');?>">
                        </div>
                        <div class="form-group customised-formgroup"> <span class="icon-envelope"></span>
                            <input type="email" name="email" class="email form-control" placeholder="Email">
                        </div>
                        <div class="form-group customised-formgroup"> <span class="icon-teleТелефон"></span>
                            <input type="text" name="phone" class="phone form-control" placeholder="<?=$t->get('phone');?>">
                        </div>
                        <div class="form-group customised-formgroup"> <span class="icon-bubble"></span>
                            <textarea name="message" class="message form-control" placeholder="<?=$t->get('message');?>" style="height: 110px;"></textarea>
                        </div>

                        <div>
                            <a class="btn btn-primary text-white send_contacts_form float-right"><?=$t->get('send_message');?></a>
                        </div>

                        <div style="clear:both;" class="mb-4"></div>

                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <p style="margin-top: 35px;"><strong>Адреса:</strong><br>
                    Київ-37, 03037<br>
                    м.Київ, проспект Повітрофлотський, 31<br><br>
                    <strong>E-mail:</strong><br>
                    <a class="disabled" href="mailto:knuba.admission@knuba.edu.ua" style="color:#333;">knubaadmission@knuba.edu.ua</a> (Приймальна комісія)<br>
                    <a class="disabled" href="mailto:knuba@knuba.edu.ua" style="color:#333;">knuba@knuba.edu.ua</a> (Канцелярія університету)</p>
                <p><strong>Приймальна комісія КНУБА:</strong> тел.&nbsp;+38(044)245-46-90<br>
                    <strong><strong>Довідкова телефонів КНУБА</strong>:</strong> тел.+38(044)241-55-80<br>
                    <a href="http://www.knuba.edu.ua/ukr/wp-content/uploads/2016/10/довідник-АТС-01.04.2019.pdf" target="_blank" rel="noopener">ДОВІДНИК СЛУЖБОВИХ ТЕЛЕФОНІВ УНІВЕРСИТЕТУ КНУБА </a></p>
            </div>
            <div class="col-md-7">
                <h3>Ми на карті Google</h3>
                <iframe width="100%" height="370" frameborder="0" style="border:1px solid silver"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10166.923427482836!2d30.4662076!3d50.427486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3fc017292af0043b!2sKyiv%20National%20University%20of%20Building%20and%20Architecture!5e0!3m2!1sen!2sua!4v1594892919823!5m2!1sen!2sua&key=<?=$GLOBALS['inside4_main_config']['Website']['google_maps_key2']?>" allowfullscreen>

                </iframe>
                <p><strong>Схема проїзду</strong> :
                    Потягом до залізничного вокзалу Київ-пасажирський, далі – маршрутним таксі №401, автобусом №69 або тролейбусом №9 до зупинки “Вулиця Освіти”.</p>
                <p>Літаком до аеропорту Бориспіль, далі – автобусом “Аеропорт Бориспіль-Київ”, далі тролейбусом №9 до зупинки “Вулиця Освіти”. Літаком до аеропорту Жуляни, далі тролейбусом №9 до зупинки “Вулиця Освіти”.</p>
                <p>Автобусом до центрального автовокзалу, далі тролейбусом №42 до зупинки “Севастопольська площа”. У всіх випадках зручно користуватися міськими автомобільними та маршрутними таксі.</p>
            </div>

            <div class="col-md-5">
                <br><br>
                    <p><img class="news" src="http://www.knuba.edu.ua/images/map.jpg" alt="" style="width:100%;"></p>


                    <!--
                    <h3><?=$t->get('our_contacts');?></h3>
                    <div><?=$t->get('our_phone');?>:
                        <div><a href="tel:065557755"><?=$t->get('manager_phone');?></a></div>
                    </div>
                    <div>Skype: alex_xandr</div>
                    <div><?=$t->get('our_email');?>: <a href="mailto:torrison1@gmail.com">torrison1@gmail.com</a></div>
                    <div><?=$t->get('our_address');?></div>
                    <div><?=$t->get('office_time');?></div>
                    -->

            </div>


        </div>
    </div>
</section>
