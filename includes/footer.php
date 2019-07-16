<!-- ***************************
        FOOTER
******************************-->

        <div class="copyrights">
            <div class="container">
                <div>
                    jdfaçjsdjçkfnfnçajnsdf
                </div>
                <div class="clearfix" style="display: flex; align-items: center; justify-content: space-between;">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="index.php"><img src="images/logos.png" alt=""></a>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                            <ul class="list-inline">
                                <li>Hospedado por : <a target="_blank" href="">TryWeb</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pull-right">
                        <div class="footer-links">
                           <div class="rede">
                               <i class="fab fa-instagram"></i>
                               <a target="_blank" href="https://www.linkedin.com/company/projeto-solenoide">@projeto.solenoide</a></li>
                            </div>
                            <div class="rede">
                                <i class="fab fa-facebook-square"></i>
                                <a target="_blank" href="https://www.facebook.com/projetoSolenoide/">projetoSolenoide</a></li>
                            </div>
                            <div class="rede">
                                <i class="fab fa-linkedin"></i>
                                <a target="_blank" href="https://www.linkedin.com/company/projeto-solenoide">Projeto Solenoide</a></li>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

    <script>
        $('.nav a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr('href'),
			    targetOffset = $(id).offset().top;
                
            $('html, body').animate({ 
                scrollTop: targetOffset - 100
            }, 500);
        });
    
    </script>