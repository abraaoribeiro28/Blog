<x-portal-layout>
    <section class="main-section py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="heading-3">O fardo pesado que levas, deságua na força que tens.</h1>
                    <p>
                        Você gostaria de receber as nossas mensagens semanais?
                    </p>
                    {{-- Substituir classes --}}
                    <div class="email-sign-up padding-top w-form">
                        <form id="email-form" action="" method="post" class="form-2">
                            @csrf
                            <input type="email" id="email" name="email" class="text-field-2 w-input" placeholder="Digite seu e-mail"/>
                            <input type="submit" class="submit-button w-button" value="Enviar"/>
                        </form>
                    </div>
                </div>
                <div class="col-6 d-none d-md-flex justify-content-center">
                    <img src="{{ asset('assets/images/stitch-sorvete.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </section>
    <div class="section">
        <div class="container">
            <div class="w-layout-grid grid-halves">
                <div class="blog-index w-dyn-list">
                    <div role="list" class="w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a 
                                href="/blog/7-of-the-best-examples-of-beautiful-blog-design"
                                class="featured-post-big w-inline-block">
                                <img
                                    src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a86b5f94e0b0c1552_1629663529924-image3.jpg"
                                    loading="lazy" alt="7 of the Best Examples of Beautiful Blog Design"
                                    sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 41vw"
                                    srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a86b5f94e0b0c1552_1629663529924-image3-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a86b5f94e0b0c1552_1629663529924-image3.jpg 1300w"
                                    class="featured-image" />
                                <div class="category padding-top">Sports</div>
                                <h3>7 of the Best Examples of Beautiful Blog Design</h3>
                                <p>At pariatur ipsum illum earum explicabo molestiae ad officia dolorum.
                                    Corrupti am</p>
                                <div class="post-details">
                                    <div>Michael Scott</div>
                                    <div class="spacer-dot">•</div>
                                    <div>Aug 22, 2021</div>
                                </div>
                            </a></div>
                    </div>
                </div>
                <div>
                    <h4>Featured</h4>
                    <div class="blog-index w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item"><a
                                    href="/blog/the-worst-advice-weve-ever-heard-about-web-design"
                                    class="featured-post-small w-inline-block">
                                    <div>
                                        <div class="category">Finance</div>
                                        <h4>The Worst Advice We&#x27;ve Ever Heard About Web Design</h4>
                                        <div class="post-details">
                                            <div>Michael Scott</div>
                                            <div class="spacer-dot">•</div>
                                            <div>8.22.21</div>
                                        </div>
                                    </div><img
                                        src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14.jpg"
                                        loading="lazy" alt=""
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                        srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14.jpg 1300w"
                                        class="featured-image" />
                                </a></div>
                        </div>
                    </div>
                    <div class="line-spacer"></div>
                    <div class="blog-index w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item"><a href="/blog/20-myths-about-web-design"
                                    class="featured-post-small w-inline-block">
                                    <div>
                                        <div class="category">Business</div>
                                        <h4>20 Myths About Web Design</h4>
                                        <div class="post-details">
                                            <div>Dwight Schrute</div>
                                            <div class="spacer-dot">•</div>
                                            <div>8.22.21</div>
                                        </div>
                                    </div><img
                                        src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a472b6af1a9afb611_1629663529924-image11.jpg"
                                        loading="lazy" alt=""
                                        sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                        srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a472b6af1a9afb611_1629663529924-image11-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a472b6af1a9afb611_1629663529924-image11.jpg 1300w"
                                        class="featured-image" />
                                </a></div>
                        </div>
                    </div>
                    <div class="line-spacer"></div>
                    <div class="blog-index w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item"><a href="/blog/5-great-web-design-resources"
                                    class="featured-post-small w-inline-block">
                                    <div>
                                        <div class="category">Business</div>
                                        <h4>5 Great Web Design Resources</h4>
                                        <div class="post-details">
                                            <div>Pam Beasley</div>
                                            <div class="spacer-dot">•</div>
                                            <div>8.22.21</div>
                                        </div>
                                    </div><img
                                        src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d97efdbe321ef_1629663529915-image15.jpg"
                                        loading="lazy" alt="" class="featured-image" />
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 
    <div class="section no-padding">
        <div class="main-container">
            <h4>Latest stories</h4>
            <div class="blog-index w-dyn-list">
                <div role="list" class="grid-thirds w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/blog/15-best-blogs-to-follow-about-web-design"
                            class="featured-post-big w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1.jpg"
                                loading="lazy" alt="15 Best Blogs To Follow About Web Design"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 26vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1.jpg 1300w"
                                class="featured-image" />
                            <div class="category padding-top">Sports</div>
                            <h4>15 Best Blogs To Follow About Web Design</h4>
                            <div class="post-details">
                                <div>Pam Beasley</div>
                                <div class="spacer-dot">•</div>
                                <div>Aug 22, 2021</div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a
                            href="/blog/7-ways-to-improve-website-usability-and-accessibility"
                            class="featured-post-big w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a62dde0ae20cf676d_1629663529919-image9.jpg"
                                loading="lazy" alt="7 Ways To Improve Website Usability And Accessibility"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 26vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a62dde0ae20cf676d_1629663529919-image9-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a62dde0ae20cf676d_1629663529919-image9.jpg 1300w"
                                class="featured-image" />
                            <div class="category padding-top">Entertainment</div>
                            <h4>7 Ways To Improve Website Usability And Accessibility</h4>
                            <div class="post-details">
                                <div>Pam Beasley</div>
                                <div class="spacer-dot">•</div>
                                <div>Aug 22, 2021</div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/how-to-improve-web-design-process"
                            class="featured-post-big w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d97e4e3e321ed_1629663529923-image17.jpg"
                                loading="lazy" alt="How to improve Web Design Process"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 26vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d97e4e3e321ed_1629663529923-image17-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d97e4e3e321ed_1629663529923-image17.jpg 1300w"
                                class="featured-image" />
                            <div class="category padding-top">Entertainment</div>
                            <h4>How to improve Web Design Process</h4>
                            <div class="post-details">
                                <div>Dwight Schrute</div>
                                <div class="spacer-dot">•</div>
                                <div>Aug 22, 2021</div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/7-must-have-tools-for-web-designers"
                            class="featured-post-big w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aadcedb20221d5781_1629663529921-image19.jpg"
                                loading="lazy" alt="7 Must Have Tools For Web Designers" class="featured-image" />
                            <div class="category padding-top">Finance</div>
                            <h4>7 Must Have Tools For Web Designers</h4>
                            <div class="post-details">
                                <div>Dwight Schrute</div>
                                <div class="spacer-dot">•</div>
                                <div>Aug 22, 2021</div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/10-quick-tips-about-blogging"
                            class="featured-post-big w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae9da052354da17e4_1629663529922-image2.jpg"
                                loading="lazy" alt="10 Quick Tips About Blogging"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 26vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae9da052354da17e4_1629663529922-image2-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae9da052354da17e4_1629663529922-image2.jpg 1300w"
                                class="featured-image" />
                            <div class="category padding-top">Travel</div>
                            <h4>10 Quick Tips About Blogging</h4>
                            <div class="post-details">
                                <div>Pam Beasley</div>
                                <div class="spacer-dot">•</div>
                                <div>Aug 22, 2021</div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a
                            href="/blog/10-things-nobody-told-you-about-being-a-web-designer"
                            class="featured-post-big w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d9785a9e321ee_1629663529918-image16.jpg"
                                loading="lazy" alt="10 Things Nobody Told You About Being a Web Designer"
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 92vw, 26vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d9785a9e321ee_1629663529918-image16-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d9785a9e321ee_1629663529918-image16.jpg 1300w"
                                class="featured-image" />
                            <div class="category padding-top">Finance</div>
                            <h4>10 Things Nobody Told You About Being a Web Designer</h4>
                            <div class="post-details">
                                <div>Michael Scott</div>
                                <div class="spacer-dot">•</div>
                                <div>Aug 22, 2021</div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="main-container">
            <h4>More stories</h4>
            <div class="blog-index w-dyn-list">
                <div role="list" class="grid-halves w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/blog/designers-who-changed-the-web"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a37d3064c5daca5bd_1629663529917-image4.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a37d3064c5daca5bd_1629663529917-image4-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a37d3064c5daca5bd_1629663529917-image4.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Business</div>
                                <h4>Designers Who Changed the Web</h4>
                                <div class="post-details">
                                    <div>Pam Beasley</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a
                            href="/blog/7-things-about-web-design-your-boss-wants-to-know"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d9785a9e321ee_1629663529918-image16.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d9785a9e321ee_1629663529918-image16-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d9785a9e321ee_1629663529918-image16.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Business</div>
                                <h4>7 Things About Web Design Your Boss Wants To Know</h4>
                                <div class="post-details">
                                    <div>Dwight Schrute</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/what-will-website-be-like-in-100-years"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a4023bc1beaae62e9_1629663529922-image10.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a4023bc1beaae62e9_1629663529922-image10-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a4023bc1beaae62e9_1629663529922-image10.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Entertainment</div>
                                <h4>What Will Website Be Like In 100 Years?</h4>
                                <div class="post-details">
                                    <div>Michael Scott</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/14-common-misconceptions-about-web-design"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a4023bc405dae62ea_1629663529920-image5.jpg"
                                loading="lazy" alt="" class="featured-image" />
                            <div>
                                <div class="category">Entertainment</div>
                                <h4>14 Common Misconceptions About Web Design</h4>
                                <div class="post-details">
                                    <div>Michael Scott</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/5-web-design-blogs-you-should-be-reading"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae4b96c1a2256958c_1629663529902-image8.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae4b96c1a2256958c_1629663529902-image8-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae4b96c1a2256958c_1629663529902-image8.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Travel</div>
                                <h4>5 Web Design Blogs You Should Be Reading</h4>
                                <div class="post-details">
                                    <div>Michael Scott</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/10-great-examples-of-responsive-websites"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5c8d97efdbe321ef_1629663529915-image15.jpg"
                                loading="lazy" alt="" class="featured-image" />
                            <div>
                                <div class="category">Sports</div>
                                <h4>10 Great Examples of Responsive Websites</h4>
                                <div class="post-details">
                                    <div>Pam Beasley</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/10-web-design-blogs-you-cant-miss"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12aa1ab7b9a456493de_1629663529907-image14.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Entertainment</div>
                                <h4>10 Web Design Blogs You Can&#x27;t Miss</h4>
                                <div class="post-details">
                                    <div>Dwight Schrute</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/why-we-love-webflow-and-you-should-too"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1-p-500.jpeg 500w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a5ed8081807753dd1_1629663529913-image1.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Finance</div>
                                <h4>Why We Love Webflow (And You Should, Too!)</h4>
                                <div class="post-details">
                                    <div>Dwight Schrute</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/the-history-of-web-design"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12a0137337066867365_1629663529905-image20.jpg"
                                loading="lazy" alt="" class="featured-image" />
                            <div>
                                <div class="category">Sports</div>
                                <h4>The History Of Web Design</h4>
                                <div class="post-details">
                                    <div>Michael Scott</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                    <div role="listitem" class="w-dyn-item"><a href="/blog/5-principles-of-effective-web-design"
                            class="featured-post-small w-inline-block"><img
                                src="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae4b96c1a2256958c_1629663529902-image8.jpg"
                                loading="lazy" alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 19vw"
                                srcset="https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae4b96c1a2256958c_1629663529902-image8-p-1080.jpeg 1080w, https://assets.website-files.com/61228f5f1250b11665938f6a/6122b12ae4b96c1a2256958c_1629663529902-image8.jpg 1300w"
                                class="featured-image" />
                            <div>
                                <div class="category">Travel</div>
                                <h4>5 Principles Of Effective Web Design</h4>
                                <div class="post-details">
                                    <div>Michael Scott</div>
                                    <div class="spacer-dot">•</div>
                                    <div>8.22.21</div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sign-up" class="section less-padding filled">
        <div class="main-container">
            <div class="small-container center-align">
                <h2>Get our weekly email</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et lacus varius, dapibus leo
                    eget.</p>
                <div class="email-sign-up padding-top w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-2"
                        data-wf-page-id="61228f5f1250b174d7938f54"
                        data-wf-element-id="4ee2ee06-edc6-a8fe-3090-34c5db110ccb"><input type="email"
                            class="text-field-2 w-input" maxlength="256" name="email-2" data-name="Email 2"
                            placeholder="Enter your email" id="email-2" required="" /><input type="submit"
                            value="Sign up" data-wait="Please wait..." class="submit-button w-button" /></form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-w-id="e80a0129-a058-7b69-e932-61ee9aec5d96" class="footer">
        <div class="main-container">
            <div class="grid-footer">
                <div>© Bulletin<br />Powered by <a href="http://webflow.com">Webflow</a>.</div>
                <div class="footer-block">
                    <div><a href="/landing-page-1" class="footer-link">Landing Page 1</a><a href="/landing-page-2"
                            class="footer-link">Landing Page 2</a><a href="/landing-page-3" class="footer-link">Landing
                            Page 3</a><a href="/landing-page-4" class="footer-link">Landing Page 4</a><a href="/contact"
                            class="footer-link">Contact</a><a href="/about" class="footer-link">About</a></div>
                    <div><a href="/licenses" class="footer-link">Licenses</a><a href="/style-guide"
                            class="footer-link">Style Guide</a><a href="/changelog" class="footer-link">Changelog</a><a
                            href="/401" class="footer-link">Password</a><a href="/404" class="footer-link">404</a></div>
                    <div><a href="http://twitter.com" target="_blank" class="footer-link">Twitter</a><a
                            href="http://instagram.com" target="_blank" class="footer-link">Instagram</a><a
                            href="http://fb.com" target="_blank" class="footer-link">Facebook</a></div>
                </div>
            </div>
        </div> 
    </div>  --}}
</x-portal-layout>
