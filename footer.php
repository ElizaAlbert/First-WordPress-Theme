<footer id="footer">
<div class="container">
<div class="row top">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <h4><?php echo the_field('kort_om_oss_rubrik', 'option') //option är kopplat till en funktion (som finns i functions.php som underlättar onödig repetering ?></h4>
        <p><?php echo the_field('kort_om_oss_text', 'option')?></p>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <h4>Kontaktuppgifter</h4>
        <p>
            <?php echo the_field('the_company', 'options')?><br />
            <?php echo the_field('gata', 'options')?><br />
            <?php echo the_field('adressnummer', 'options')?>
        </p>
        <p>
            <?php echo the_field('mobilnummer', 'options')?><br />
            <?php echo the_field('e-post', 'options')?><a href="">info@thecompany.com</a>
        </p>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <h4>Social media</h4>
        <ul class="social">
            <li>
                <i class="fa fa-facebook"></i> <a href="<?php echo get_field('facebook')?>">Facebook</a>
            </li>
            <li>
                <i class="fa fa-twitter"></i> <a href="<?php echo get_field('twitter')?>">Twitter</a>
            </li>
            <li>
                <i class="fa fa-instagram"></i> <a href="<?php echo get_field('instagram')?>">Instagram</a>
            </li>
            <li>
                <i class="fa fa-linkedin"></i> <a href="<?php echo get_field('linkedin')?>">LinkedIn</a>
            </li>
        </ul>
    </div>
</div>
<div class="row bottom">
    <div class="col-xs-12">
        <p>Copyright &copy; Grupp X, 2016</p>
    </div>
</div>
</div>
</footer>

</div>
    
<script src="js/script.js"></script>

<?php wp_footer();?>
</body>
</html>