<?php include('./view/outside_header.php'); ?>
    <div class="wrap">
    
            <div class="content">
            <img src="/images/watershedicon.png" class="watershed-icon" alt=" "/>
            <img src="/images/WS_landing_logo.png" class="watershed-title" alt="Watershed"/>
            <div class="tab">
                <div class="tab-content">
                    <p></p>
                    <p>Stay square with friends, roommates, and road trip buddies.</p> 
                    <p>Watershed is a new finance app designed to help you share expenses simply and transparently.</p> 
                    <p>Available now for web and soon for iPhone, Android and Windows Phone.</p>
                    <p>Sign up now. It won't cost you a penny.</p>              
                   
                </div> <!--tab-content-->
            </div> <!--tab-->
        </div> <!--content-->
    </div> <!--wrap-->

    
    
        <div class="iphone">
            <img alt="iphone" src="/images/iphone.png"/>
            	<div id="iphone-overlay">
            	<img alt="screen-shot-preload" src="/images/screenshot6.2.png" width="239" height="359" id="iphone-top"/>
            	</div> <!--overlay-->
        </div> <!--iphone-->
        
    <script src="/scripts/slideshow.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            RunSlideShow("iphone-top", "iphone-overlay", "/images/screenshot6.2.png; /images/screenshot4.2.png; /images/screenshot2.2.png; /images/screenshot5.2.png", 8);
        });
    </script>
        
        </div>
    </div>
            <div id="footer">
        	<div id="footer-inner">
				<p class="logo">
					<a href="/">
					<img src="/images/ws-logo-footer.png" alt="Watershed"></a>
					Share &#43;  Stay Square
					</p><br/>
									
				<ul id="footer-nav">
					<li>
						<a id="f-home" href="/about/">About</a>
					</li>
					<li>
						<a href="/faq/">FAQ</a>
					</li>
					<li>
						<a href="/contact/">Contact</a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/#!/watershedapp">Twitter</a>
					</li>
					<li>
						<a target="_blank" href="http://blog.watershedapp.com">Blog</a>
					</li>
					<li>
						<a href="/testimonials/">Testimonials</a>
					</li>
					
					<li>
						<a href="/terms/">Terms</a>
					</li>
					<li>
						<a href="/privacy/">Privacy</a>
					</li>

				</ul>
				
					<p>Copyright &copy; 2011-<?php echo date("Y"); ?> Progger, LLC.   &#124;   Version (0.9.4.22)  &#124;  <a href="http://nytm.org/made">Handcrafted in Brooklyn, NY</a></p>
		</div>
	</div>
</body>
</html>