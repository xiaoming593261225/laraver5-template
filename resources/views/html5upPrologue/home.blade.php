@extends('html5upPrologue.base')

@section('main_section')
<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2 class="alt">Sveicināti!</h2>
                <p>Ligula scelerisque justo sem accumsan diam quis<br />
                    vitae natoque dictum sollicitudin elementum.</p>
            </header>

            <footer>
                <a href="#portfolio" class="button scrolly">Portfolio</a>
            </footer>

        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="two">
        <div class="container">

            <header>
                <h2>Portfolio</h2>
            </header>

            <p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
                egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
                Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis
                fusce hendrerit lacus ridiculus.</p>

            <div class="row portfolio-section-container">
                <div class="4u">
                    <article class="item">
                        <a href="#" class="image fit section-selector"><img src="images/portrait-bw.jpg" alt="" /></a>
                        <header>
                            <h3>Portrets B&W</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit section-selector"><img src="images/portrait-color.jpg" alt="" /></a>
                        <header>
                            <h3>Portrets Krāsains</h3>
                        </header>
                    </article>
                </div>
                <div class="4u">
                    <article class="item">
                        <a href="#" class="image fit section-selector"><img src="images/nude.jpg" alt="" /></a>
                        <header>
                            <h3>Akts</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit section-selector"><img src="images/abandonment.jpg" alt="" /></a>
                        <header>
                            <h3>Pamestība</h3>
                        </header>
                    </article>
                </div>
                <div class="4u">
                    <article class="item">
                        <a href="#" class="image fit section-selector"><img src="images/various.jpg" alt="" /></a>
                        <header>
                            <h3>Dažādi</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit section-selector"><img src="images/landscape.jpg" alt="" /></a>
                        <header>
                            <h3>Orci Convallis</h3>
                        </header>
                    </article>
                </div>
            </div>
            <div class="row opened-section-container">
                here shall be images of the section (container will be hidden)
                <a href="#" class="show-portfolio">Back to portfolio</a>
            </div>

        </div>
    </section>

    <!-- About Me -->
    <section id="about" class="three">
        <div class="container">

            <header>
                <h2>About Me</h2>
            </header>

            <a href="#" class="image featured"><img src="images/about-me.jpg" alt="" /></a>

            <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
                ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
                laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
                parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
                dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
                ornare iaculis.</p>

        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Contact</h2>
            </header>

            <p>Elementum sem parturient nulla quam placerat viverra
                mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
                donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
                orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

            <form method="post" action="#">
                <div class="row 50%">
                    <div class="6u"><input type="text" name="name" placeholder="Name" /></div>
                    <div class="6u"><input type="text" name="email" placeholder="Email" /></div>
                </div>
                <div class="row 50%">
                    <div class="12u">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Send Message" />
                    </div>
                </div>
            </form>

        </div>
    </section>

</div>
@stop