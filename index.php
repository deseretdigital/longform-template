<?php
    $return = 'http://www.deseretnews.com';
    if(!empty($_SERVER['HTTP_REFERER'])) {
        $ref = $_SERVER['HTTP_REFERER'];
        if($ref && (strpos($ref,'national.deseretnews.com') !== false)) {
            $return = 'http://national.deseretnews.com';
        }
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
        <!-- OpenGraph -->
        <meta property="og:title" content="Life and Liberty">
        <meta property="og:url" content="http://www.deseretnews.com/interactive/2014/life-liberty">
        <meta property="og:image" content="http://www.deseretnews.com/interactive/2014/life-liberty/assets/images/liberty-900.jpg" />


        <!-- Twitter Cards -->
        <meta name="twitter:card" content="summary"></meta>
        <meta name="twitter:site" content="@deseretnews"></meta>
        <meta name="twitter:creator" content="@loisco"></meta>
        
        <meta http-equiv="X-UA-Compatible" content="IE=9">
        <meta property="vr:type" content="article">
        <meta property="vr:category" content="family">

        <link href="style/app.css" rel="stylesheet" type="text/css">
        <link href="/img/dn.ico" rel="icon" type="image/x-icon">
        <link href="/img/dn.ico" rel="shortcut icon" type="image/x-icon">

        <?php
        include 'static.stats.php';
        ?>
        <script data-main="lib/app/main" src="lib/requirejs/require.js"></script>
        <script type="text/javascript">
            require(['main'], function() {
                require(['app']);
            });
        </script>
        <title>Life and Liberty | Deseret News</title>
    </head>
    <body>
        <header>
            <div class="masthead">
                <a href="<?php echo $return; ?>" class="logo"><img src="assets/images/dnews-logo-white.png"></a>
                <div class="chapters">
                    <a href="#section-1" class="chapter-link chapter active-chapter" data-section="1"><span class="number" data-chapter="1">1</span><span class="title">Life &amp; Liberty</span></a>
                    <a href="#section-2" class="chapter-link chapter" data-section="2"><span class="number" data-chapter="2">2</span><span class="title">Unbearable stress</span></a>
                    <a href="#section-3" class="chapter-link chapter" data-section="3"><span class="number" data-chapter="3">3</span><span class="title">Doing time</span></a>
                    <a href="#section-4" class="chapter-link chapter" data-section="4"><span class="number" data-chapter="4">4</span><span class="title">Here &mdash; and there, too</span></a>
                    <a href="#section-5" class="chapter-link chapter" data-section="5"><span class="number" data-chapter="5">5</span><span class="title">Matchmaker</span></a>
                    <a href="#section-6" class="chapter-link chapter" data-section="6"><span class="number" data-chapter="6">6</span><span class="title">Human-dog family</span></a>
                </div>
            </div>
        </header>
        <div class="wrapper">
            <div class="cover video">
                <div class="video-container"><video class="cover-video" data-src="http://media.deseretnews.com/liberty-motion.mp4" type="video/mp4" autoplay="true" loop="true"></video></div>
                    <div class="overlay">
                        <div class="overline">
                            <span>
                                <svg class="liberty-bell" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 20.9 25.5" enable-background="new 0 0 20.9 25.5" xml:space="preserve" height="20">
                                    <path d="M20.4,20.7c0-0.6-1.3-1.2-2-2.4C17.8,17.3,16.3,8,14.7,6c-0.7-0.9-2.5-1.6-3.7-1.8V2.4c1.3,0.2,3.1,0.9,3.7,1.8
                                        c0.1,0.1,0.2,0.3,0.3,0.5h4.9c0,0-1.1-0.8-1.7-2.4c-0.6-1.6-0.2-1.9-0.2-1.9H2.8c0,0,0.3,0.7-0.2,1.9C2.2,3.5,1,4.7,1,4.7h4.9
                                        C6,4.5,6.1,4.3,6.2,4.2c0.7-0.9,2.5-1.6,3.7-1.8v1.8C8.6,4.4,6.9,5.1,6.2,6c-1.6,2-3,11.2-3.7,12.4c-0.7,1.1-2,1.8-2,2.4
                                        c0,0.5,0.4,1,0.9,1l0,0h5.3l1-1.3l-1.5-1.6l1.6-2.3l-1.6-3.1l2.3-5.3l-1.3,5.5l2.2,3l-1.5,2l1.6,1.6l-1.5,1.5h1.7v0.5
                                        c-0.5,0.3-0.8,0.8-0.8,1.4c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6c0-0.6-0.3-1.1-0.8-1.4v-0.5h8.3l0,0
                                        C20.1,21.7,20.4,21.2,20.4,20.7z"/>
                                </svg>
                                Veterans Day 2014
                            </span>
                        </div>
                        <h1>Life &amp; Liberty</h1>
                        <h3 class="sub">Service dogs help set veterans free from aftermath of war</h3>
                    </div>
                    <div class="alternate-image"><img src="assets/images/liberty-900.jpg"/></div>
            </div>
            <section class="section byline-section">

                <div class="inline-social">
                    <div class="pw-widget pw-horizontal pw-counter-vertical clearfix">
                        <a class="pw-button-facebook pw-look-native"></a>
                        <a class="pw-button-twitter pw-look-native"></a>
                        <a class="pw-button-email pw-look-native"></a>
                        <a class="pw-button-post-share"></a>
                    </div>
                </div>
                <div class="byline">
                    <p>published Monday, Nov. 10, 2014</p>
                </div>
                <p></p>
                <div class="byline">
                    <p>story by <span itemprop="author" itemscope itemtype="http://schema.org/Person"><strong>Lois M. Collins</strong></span></p>
                    <p>photos and video by <strong>Jeffrey D. Allred</strong></p>
                </div>

            </section>
            <section class="section" data-section="1" id="section-1">
                <p class="large-text dropcap">The dog is about 39 pounds, low to the ground and well-muscled, her fur a mottle of patches and spots. At a guess, she's a heeler mix, a shelter refugee, maybe 4 years old.</p>

                <div class="inline inline-image inline-right inline-right-offset">
                    <img class="lazy js-lazy-load" src="assets/galleries/caleb-dunham/liberty-caleb-dunham-03-sm.jpg" data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-03-med.jpg">
                    <div class="image-caption">Veteran Caleb Dunham pets his dog Liberty at a park near his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</div>
                </div>

                <p>Her name is Liberty, a word that means something different to each person whose life intersect hers:</p>

                <p>She's a potential service animal, training to help free a war-battered veteran named Caleb Dunham from the anxiety and distress that have nearly shut him down and locked him indoors. He fought for his country in Iraq and Afghanistan; back home he doesn't know how to fight for himself.</p>

                <p>She's an act of redemption for two incarcerated women who may never be free. They are training her and sending her back into the society from which they have been forcibly removed. In prison, the women teach the dog basic behavioral skills so she will soon be able to help the veteran full-time.</p>
                <p>Liberty is one of thousands of dogs nationwide being trained for veterans who suffer from post traumatic stress disorder &mdash; something the Department of Veterans Affairs reckons includes one-fourth of military personnel returning from Iraq and Afghanistan conflicts, roughly 500,000 veterans so far.</p>

                <p>Only the best trained of the dogs will be certified as service animals. Others stop short of that to become emotional support animals, psychiatric service dogs or simply great companions. The level of assistance the dog will provide depends on what a veteran wants and how much work he or she is willing to do with the dog, says Cathy Allred King, who founded Canines With a Cause in Utah four years ago.</p>

                <p>The dogs are shelter animals with their own hard-luck pasts. We don't know what sent Liberty to shelter any more than we know what Dunham endured in war. Both dog and human have been scuffed. </p>

                <p>Programs like this one and many others across America, with names like Pets for Vets, Warrior Canine Connection and Paws of War, hope the dogs that they rescue will in turn rescue a veteran.</p>
                <div class="inline inline-video inline-full">
                    <video class="js-video"
                        preload="metadata"
                        controls
                        data-src="http://media.deseretnews.com/life-liberty-main-480p.mov"
                        data-src-hd="http://media.deseretnews.com/life-liberty-main-720p.mov"
                        type="video/mp4"
                        data-image="http://media.deseretnews.com/life-liberty-main-thumb.jpg"
                    ></video>
                </div>
            </section>
            <section class="section" data-section="2" id="section-2">
                <h3>Unbearable stress</h3>

                <p>A veteran walks tentatively into the Vet Center in Murray, but visibly relaxes when she spots Mikey, a 14-year-old Australian shepherd. He belongs to readjustment counselor Candace Monzon, who can bring him to work because he's a certified therapy dog through Therapy Animals of Utah.</p>

                <p>Monzon often refers veterans to Canines With a Cause because she's seen the "Mikey effect": If a vet cries or becomes anxious when Monzon asks something, Mikey saunters over and places his head on the veteran's lap. As the veteran strokes him, words form and then flow. The therapy session clears a hurdle.</p>

                <p>"He is non-judging and accepting. He has a keen sense when people are sad and need love and connection. &hellip; He normalizes their emotions," Monzon said.</p>

                <p>That's crucial, because PTSD is unpredictable and sometimes deadly. King said enough U.S. veterans kill themselves each week to fill a midsize 737 passenger jet, at least some of them because of PTSD.</p>

                <p>At the VA in Salt Lake City, social worker Justyn Manley works with veterans whose worlds are very small. "PTSD is an avoidance-based disorder," she said. "There's a lot of isolation." Veterans often say they feel emotionally disconnected. A canine &mdash; friendly and constant &mdash; may break through first, then other relationships follow. Just going outside to walk the dog helps the veteran see life going on around her.</p>

                <div class="inline inline-sidebar inline-right inline-right-offset sidebar">
                    <h3>Coming home</h3>
                    <div class="text">
                        <p class="description">
                            Neither going to war nor coming home is easy.
                        </p>
                        <p>When Mark Taylor's dad came home from serving with the U.S. military in Vietnam, his son said he tore off his uniform and didn't tell anyone that he fought in the war.</p>
                        <p>The waves of soldiers returning from more recent conflicts in Iraq, Afghanistan and Kosovo have had a different experience, said Taylor, also a veteran. When he came home from Kosovo, there were formal welcomes and a media throng.</p>
                        <p class="continue"><span>Read more</span></p>
                        <div class="read-on">
                        <p>Neither going to war nor coming home is easy, experts agree. There are complex feelings related to service, which leaves both those returning from deployment and those welcoming them back a bit tentative.</p>
                            <p>Candace Monzon, a readjustment counselor at the Veterans Center in Murray, Utah, points out that the word "veteran" just means someone who served in the military and nothing about where they served or what they experienced.</p>
                            <p>"Your next door neighbors can be veterans. The military is the representation of civilization. Veterans are people like everybody else, and I don't think they want to be treated any differently," she said. "I don't actually know anybody who wants to be treated like they're different."</p>
                            <h3>Follow their lead</h3>
                            <p>A one-size reaction to service doesn't exist, she noted. She hears from some Vietnam vets that they've never been thanked for their service and some were actually treated very badly. But vets returning from Afghanistan are sometimes uncomfortable being thanked, Monzon said, because many feel they were just doing their job.</p>
                            <p>"I think it's important for non-veterans to understand that not every soldier is proud of their service," said Taylor, of West Jordan, Utah, who is the veteran outreach director for Team Red, White and Blue, a national organization with local chapters that involves veterans and the community in physical and social activities. "That can happen for many reasons."</p>
                            <p>He describes soldiers who feel bad for not deploying to war zones and others who feel bad because they did. They all went where they were assigned. Those not sent into conflict sometimes don't feel they contributed as much as they could have or should have, Taylor said.</p>
                            <p>So what should a caring public do?</p>
                            <p>"I think the best thing is say 'Thank you for your service' and see what the reaction is," said Taylor. "If a veteran seems to shy away, maybe he or she is not in a place where they want to talk about it or maybe they're uncomfortable. If they respond well, follow up if you want. 'What branch were you in?' &hellip; 'I had a father or mother in the service.' "</p>
                            <p>When a veteran is receptive, it's OK to ask some questions about their service &mdash; although it's never OK to ask if they've killed anyone, said Benita Koeman, a military spouse and founder of "Operation We Are Here," which offers a large directory of informational resources for veterans and their loved ones.</p>
                            <p>On the other hand, it's always appropriate to ask how they're doing and how you and your family can support military and veteran families.</p>
                            <p>If they want to talk about their service, Koeman said, then listen. But don't pry.</p>
                            <h3>Nothing to fear</h3>
                            <p>"The biggest thing is don't make any judgments," said Monzon, who added that some people have strange ideas about veterans and service and post traumatic stress disorder.</p>
                            <p>Not all veterans have PTSD, and a lot of non-veterans suffer from it, as well. To those who do, "PTSD is not something to be stigmatized or scared of. It does not mean (they are) violent or going to hurt anybody. I have 50 people on my caseload, and I'm not scared of any of them. … It's just an internal wound that you can't see."</p>
                            <p>The rules of etiquette for dealing with veterans is the same as for anyone else. If someone has a service dog, for example, veteran or not, ask for permission before you walk up and pet it. That's true of any dog that's trained to assist someone.</p>
                            <p>If you happen to see someone with a service dog, don't make judgments, either, based on how they look, said Cathy Allred King, founder of Utah-based Canines with a Cause. Individuals may have PTSD, traumatic brain injury, severe anxiety or other issues that benefit from the animal. Because someone can't see it doesn't make it less real.</p>
                        </div>
                    </div>
                    <div class="scroll-indicator"></div>
                </div>
                <p>Dogs can be trained to rescue a veteran from specific situations. If fireworks exploding overhead create panic or paralysis, a dog may bring the veteran back to the present or calm him down, said dog behaviorist Lynne Gilbert-Norton, who selects shelter dogs for the program.</p>

                <p>A dog also can be trained to stand between a woman veteran who was sexually assaulted and others so she feels a safe buffer zone.</p>

                <p>Both dogs and veterans traumatized by war are naturally hyper-aware. David Thimm, a Navy veteran of the 2005-06 Persian Gulf conflict, said everything bothered him when he got home. Monty, a German shepherd-boxer mix, steadies him. "I was kind of hesitant about choosing a dog," said Thimm, 31. "I remember when I petted him, he put his paw on my arm. 'You pet me, I'll pet you.' There's no way I can let this dog go."</p>

                <p>Still, while a dog may help, program director King is quick to warn a dog is not for everyone. And a dog alone can't solve PTSD.</p>

            </section>
            <section class="section" data-section="3" id="section-3">
                <h3>Doing time</h3>
                <p>Liberty spends most of her time in the Timpanogos Women's Facility at the Utah State Prison, where Kerri Brown and Bobbie Widdison are teaching her about excellent behavior. The three share a cell that's 7.42 feet by 11.5 feet. Liberty sleeps in a crate across from their bunk bed.</p>
                <div class="gallery-lazy gallery inline inline-right inline-right-offset inline-gallery js-gallery" id="gallery02">
                    <h4><span class="glyphicons picture"><i></i> Training Liberty</span></h4>
                    <div class="js-gallery-body gallery-body">
                        <div class="gallery-fullscreen"><img src="assets/icons/resize.png"></div>
                        <div class="gallery-navigation"><div class="gallery-navigation-left gallery-navigation-item"></div><div class="gallery-navigation-right gallery-navigation-item"></div></div>
                        <div class="gallery-images">

                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-01-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-01-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-01-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-01-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Utah State Prison inmates Bobbie Widdison and Kerri Brown have been training Liberty for veteran Caleb Dunham in Salt Lake County Aug 26, 2014.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-02-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-02-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-02-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-02-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Utah State Prison inmate Kerri Brown walk to training class with Liberty  in Salt Lake County Aug 26, 2014.  The dog is being trained for veteran Caleb Dunham.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-03-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-03-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-03-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-03-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Utah State Prison inmate Kerri Brown walk to training class with Liberty  in Salt Lake County Aug 26, 2014. The dog is being trained for veteran Caleb Dunham.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-04-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-04-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-04-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-04-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Utah State Prison inmates Bobbie Widdison and Kerri Brown have been training Liberty for veteran Caleb Dunham in Salt Lake County Aug 26,  2014.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-05-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-05-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-05-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-05-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Utah State Prison inmate Bobbie Widdison has been training Liberty for veteran Caleb Dunham in Salt Lake County Aug 26,  2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-06-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-06-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-06-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-06-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Liberty is being trained at the Utah State Prison for veteran Caleb Dunham in Salt Lake County Aug 26, 2014.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/liberty-prison/liberty-prison-07-sm.jpg"
                                data-src="assets/galleries/liberty-prison/liberty-prison-07-sm.jpg"
                                data-src-thumb="assets/galleries/liberty-prison/liberty-prison-07-thumb.jpg"
                                data-src-large="assets/galleries/liberty-prison/liberty-prison-07-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Utah State Prison inmates Bobbie Widdison and Kerry Brown have been training Liberty for veteran Caleb Dunham in Salt Lake County Aug 26,  2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                        </div>
                    </div>
                    <p class="caption gallery-caption js-gallery-caption"></p>
                    <div class="gallery-index"></div>
                </div>
                <p>Dogs may go straight to their veterans for training. But some veterans are overwhelmed by the prospect of starting from scratch with an unskilled dog. Those dogs go to the women's prison for basic training.</p>

                <p>During the day, Liberty tags along as Widdison and Brown teach victim-impact or life skills classes to other inmates. Last summer, when they worked in the garden, Liberty wandered in the squash. Widdison joked that she and Brown are "covered in fur, pockets full of poop bags and hot dogs."</p>

                <p>She wasn't joking when she said Liberty shines light in dark times. Brown has been serving two consecutive 1- to 15-year terms for manslaughter and theft by deception. She won't go before the parole board until spring 2020. The board gave Widdison a life sentence, revoking a previous parole date for her conviction for murder and child abuse/neglect.</p>

                <p>Capt. MaryAnn Reding helped bring Canines With a Cause to the prison because it provides inmates an opportunity to give back. Although they must have exemplary behavior in prison to be selected to train dogs, some of the women, like Widdison, will never be released.</p>

                <p>Initially, staff worried that 140 women living together while only a few had dogs might spark jealousy, even sabotage. Instead, Reding said, "It has united them. It is interesting to see how the dogs have taught them order. Our order is demanded. Theirs is given out of love &mdash; it's what the dogs need."</p>

                <p>Brown and Widdison are thrilled to be sending this gift to a veteran. Although dogs don't use language the way people do, the women taught Liberty to vocalize, using her mouth, the words "I love you." It is clear and unmistakable.</p>

                <div class="inline inline-video inline-full">
                    <video class="js-video"
                        preload="metadata"
                        controls
                        data-src="http://media.deseretnews.com/life-liberty-caleb-dunham-480p.mov"
                        data-src-hd="http://media.deseretnews.com/life-liberty-caleb-dunham-720p.mov"
                        type="video/mp4"
                        data-image="http://media.deseretnews.com/life-liberty-caleb-dunham-thumb.jpg"
                    ></video>
                </div>
            </section>
            <section class="section" data-section="4" id="section-4">
                <h3>Here &mdash; and there, too</h3>

                <p>In recent conflicts, the enlisted and their families have often endured multiple deployments, sometimes to different war zones. "Four or five, trauma on top of trauma, creating challenges that go untreated over time. It's much more complex," Manley said. Men and women may return home to broken relationships, arguments and sometimes divorce. PTSD's high-level anxiety may make someone appear irascible. "Jumpy" is often an understatement.</p>

                <div class="gallery-lazy gallery inline inline-right inline-right-offset inline-gallery js-gallery" id="gallery02">

                    <h4><span class="glyphicons picture"><i></i> Caleb Dunham</span></h4>
                    <div class="js-gallery-body gallery-body">
                        <div class="gallery-fullscreen"><img src="assets/icons/resize.png"></div>
                        <div class="gallery-navigation"><div class="gallery-navigation-left gallery-navigation-item"></div><div class="gallery-navigation-right gallery-navigation-item"></div></div>
                        <div class="gallery-images">

                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        src="assets/galleries/caleb-dunham/liberty-caleb-dunham-07-sm.jpg"
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-07-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-07-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-07-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham pets his dog Liberty at his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        src="assets/galleries/caleb-dunham/liberty-caleb-dunham-01-sm.jpg"
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-01-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-01-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-01-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham talks about his war experiences his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        src="assets/galleries/caleb-dunham/liberty-caleb-dunham-02-sm.jpg"
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-02-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-02-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-02-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham walks with his dog Liberty near his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-03-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-03-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-03-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham pets his dog Liberty at a park near his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-04-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-04-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-04-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham plays with his dog Liberty near his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-05-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-05-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-05-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham plays with his dog Liberty near his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-06-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-06-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-06-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham walks with his dog Liberty near his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-08-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-08-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-08-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham pets his dog Liberty at his home along with his wife Christina and son Calen in Kearns October 26, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                            <div class="gallery-image">
                                <div class="img">
                                    <img
                                        data-src="assets/galleries/caleb-dunham/liberty-caleb-dunham-09-sm.jpg"
                                        data-src-thumb="assets/galleries/caleb-dunham/liberty-caleb-dunham-09-thumb.jpg"
                                        data-src-large="assets/galleries/caleb-dunham/liberty-caleb-dunham-09-med.jpg"
                                        >
                                </div>
                                <p class="caption gallery-caption">Veteran Caleb Dunham plays with his son Calen his home in Kearns October 4, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                            </div>
                        </div>
                    </div>
                    <p class="caption gallery-caption js-gallery-caption"></p>
                    <div class="gallery-index"></div>
                </div>

                <p>As Liberty's training continues in the prison, she spends weekends at what will be her home with Caleb and his wife Christina, 26 and 24, and their son Calen, 3.</p>

                <p>Caleb and Christina went to high school together in Hurricane, but didn't know each other. He joined the Army and was deployed to Iraq and Afghanistan. She traveled for pleasure. He told her early on he had PTSD and was struggling, but working on it. When they married, neither knew how challenging their days could get.</p>

                <p>Calen was born at 24 weeks, weighing just two pounds, and doctors doubted he would live. When he was flown to Primary Children's Hospital in Salt Lake City, they followed in the car they would live in for a month because they didn't know anyone there. The stress on Caleb piled deeper, but he found a job. When Calen got out of the hospital, Christina found one, too. She works nights, then cares for the toddler in the mornings and when Caleb goes to work. Calen has developmental delays from extreme prematurity.</p>

                <p>Caleb also suffered a traumatic brain injury while serving. He calls himself "broken" and suggests someone meeting him for the first time watch the documentary "Restrepo," a stark portrayal of a particularly dangerous place in Afghanistan. He served there. The response from other veterans is, "And you lived?"</p>

                <p>In high school he was gregarious. Now he is mostly anxious and depressed. He said he sleeps too much and, until Liberty, he had no interest in going outside, except to work his part-time job.</p>

                <p>When Liberty is home on weekends, though, he is attentive. As they walk to the park across from the apartment, his step is bouncier, his mood noticeably lighter.</p>

                <div class="inline inline-video inline-full">
                    <video class="js-video"
                        preload="metadata"
                        controls
                        data-src="http://media.deseretnews.com/life-liberty-todd-hooper-480p.mov"
                        data-src-hd="http://media.deseretnews.com/life-liberty-todd-hooper-720p.mov"
                        type="video/mp4"
                        data-image="http://media.deseretnews.com/life-liberty-todd-hooper-thumb.jpg"
                    ></video>
                </div>
            </section>
            <section class="section" data-section="5" id="section-5">
                <h3>Matchmaker</h3>

                <p>Dog behaviorist Lynne Gilbert-Norton combs shelters for dogs that could make good companions for veterans. They must be friendly, calm and confident, she said &mdash; nonaggressive, able to focus amid distractions, flexible enough to handle new surroundings and people. Fear and aggression are two ends of a dog-personality continuum that won't work.</p>
                <div class="gallery-lazy gallery inline inline-right inline-right-offset inline-gallery js-gallery">
                    <h4><span class="glyphicons picture"><i></i> Todd Hooper</span></h4>
                    <div class="js-gallery-body gallery-body">
                        <div class="gallery-fullscreen"><img src="assets/icons/resize.png"></div>
                        <div class="gallery-navigation"><div class="gallery-navigation-left gallery-navigation-item"></div><div class="gallery-navigation-right gallery-navigation-item"></div></div>
                        <div class="gallery-images">

                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/todd-hooper/liberty-todd-hooper-02-sm.jpg"
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-02-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-02-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-02-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper works with his dog Mowgli during a training session in Salt Lake County Aug 22, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/todd-hooper/liberty-todd-hooper-01-sm.jpg"
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-01-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-01-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-01-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Mowgli runs during dog training class in Salt Lake County October 2014.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-03-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-03-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-03-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper walks with his dog Mowgli in Parleys Nature Park in Salt Lake County October 22, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-04-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-04-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-04-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper walks with his dog Mowgli in Parleys Nature Park in Salt Lake County October 22, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-05-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-05-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-05-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper walks with his dog Mowgli in Parleys Nature Park in Salt Lake County October 22, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-06-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-06-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-06-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper walks with his dog Mowgli in Parleys Nature Park in Salt Lake County October 22, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-07-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-07-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-07-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper looks over war memorabilia with his wife Amber at their home in Salt Lake County October 26, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/todd-hooper/liberty-todd-hooper-08-sm.jpg"
                                data-src-thumb="assets/galleries/todd-hooper/liberty-todd-hooper-08-thumb.jpg"
                                data-src-large="assets/galleries/todd-hooper/liberty-todd-hooper-08-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Todd Hooper and his wife Amber walk with their dog Mowgli near their home in Salt Lake County October 26, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                        </div>
                    </div>
                    <p class="caption gallery-caption js-gallery-caption"></p>
                    <div class="gallery-index"></div>
                </div>
                <p>Training can take a couple of years or more, and it's rigorous. Most owners want a pet that can sit quietly for 10 minutes. Some veterans need dogs that can do that for hours.</p>

                <p>They may have to shuffle to find the right pair. Todd and Amber Hooper adopted a dog and tried to train her through the program, but she had the wrong personality for it. The program found them a much better fit. Mowgli is a comically charming-looking 2-year-old springer terrier mix who is eager to learn.</p>

                <p>Todd, 29, joined the Army National Guard when he was 17 and left it at 26, figuring it was time to go to school and marry and start a family. But deployment in Afghanistan had sparked perpetual anxiety. Normally easy-going, he became irritable. When he and Amber began to struggle, they headed to counseling &mdash; and he learned his PTSD was spilling onto his marriage.</p>

                <p>Eight months ago, he was falling apart emotionally. "More than anything, for nearly a decade I missed feeling emotion the way I did when I was younger. I really didn't feel human, but I remembered what it once felt like. That was a bitter pill all those years." Today, he said, he has a wife he adores and a dog that delights him, and he even thinks it might be time to start a family. That doesn't mean the anxiety's gone. But he's found tools, like intensive therapy and the dog &mdash; and he's using them.</p>

                <p>"I hope other veterans will decide to get help," he said. "Mowgli isn't the only thing that helps me. We had couples therapy, group, and intense counseling through the VA."</p>

                <p>When at his lowest point his counselor said vets with PTSD see their stress scores plummet if they really do their therapy, Todd decided to go all in. "I thought, if it's possible I can live a much more normal life, I would do this. I have devoted myself to that program." He's training Mowgli with the same determination, but more joy and better perspective than he had before.</p>

                <p>Nick Lotze isn't there yet, but he's moving forward with a beautiful year-old pointer/retriever mix named Freyja by his side. He served six years in the Army and was deployed to both Iraq and Afghanistan. Now he studies social work at the University of Utah, and wants to become a policeman.</p>

                <p>At 31, he is lonely, but quickly adds that he is not a loner. He knows how some minds combine the words "loner" and "PTSD." That's not him.</p>

                <p>He was a marksman and sometimes driver in Iraq, and after enduring roadside attacks there, fear has followed him home. Last year, he sold his car and now bicycles everywhere. He's pedaled 6,000 miles.</p>

                <p>Nick longs to be happy, and Freyja makes him happy. "It doesn't matter if I've been gone five minutes or eight hours, she's ecstatic to see me," he said. "I think what we're all looking for in life is to be relevant to somebody. I matter to her." Being alone, he added, makes people selfish. Freyja keeps him moving with something besides himself in mind.</p>

                <p>Nick is his own harshest judge. Lots of vets are, King said. But the public can be even meaner.</p>

                <p>King thinks too many people see a healthy-looking man or woman with a dog labeled as a service animal and think, "Yeah, right." They're also skeptical because the dogs are often mutts. "Even a poodly dog can save a veteran's life," said King.</p>

                <p>Canines With a Cause wants the public to know PTSD and traumatic brain injuries are not visible to the naked eye &mdash; and that doesn't make them less real or debilitating.</p>

                <div class="inline inline-video inline-full">
                    <video class="js-video"
                        preload="metadata"
                        controls
                        data-src="http://media.deseretnews.com/life-liberty-nick-lotze-480p.mov"
                        data-src-hd="http://media.deseretnews.com/life-liberty-nick-lotze-720p.mov"
                        type="video/mp4"
                        data-image="http://media.deseretnews.com/life-liberty-nick-lotze-thumb.jpg"
                    ></video>
                </div>
            </section>
            <section class="section" data-section="6" id="section-6">
                <h3>Human-dog family</h3>

                <p>Dog &mdash; and people &mdash; training doesn't always go smoothly. In a recent class, Todd's dog Mowgli was distracted by the treats, while Freyja seemed confused about what Nick wanted her to do. Canines With a Cause head trainer Shaun Woodard told them that fault for a dog's confusion belongs to the veteran. "Remember, the higher your goals are, the less fine 'pretty good' is."</p>

                <p>There's an art to matching dog and veteran and teaching them to work together. Most veterans first arrive at class dogless and curious, and Woodard watches how they react to and handle the dogs the program brought. That helps make a match.</p>

                <p>Woodard and Gilbert-Norton watch the dogs for attentiveness and energy level. "Many of the dogs that come out of shelter are under stress, so as we are taking them out and they are falling back into the dogs they really are, we're evaluating their emotional stability," he said.</p>
                <div class="gallery-lazy gallery inline inline-right inline-right-offset inline-gallery js-gallery" id="gallery02">
                    <h4><span class="glyphicons picture"><i></i> Nick Lotze</span></h4>
                    <div class="js-gallery-body gallery-body">
                        <div class="gallery-fullscreen"><img src="assets/icons/resize.png"></div>
                        <div class="gallery-navigation"><div class="gallery-navigation-left gallery-navigation-item"></div><div class="gallery-navigation-right gallery-navigation-item"></div></div>
                        <div class="gallery-images">

                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/nick-lotze/liberty-nick-lotze-02-sm.jpg"
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-02-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-02-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-02-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze holds his dog Freyja at a training class in Salt Lake City Aug 15, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                src="assets/galleries/nick-lotze/liberty-nick-lotze-01-sm.jpg"
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-01-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-01-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-01-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze holds his dog Freyja at a training class in Salt Lake City Aug 15, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-03-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-03-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-03-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Freyja runs during dog training class in Salt Lake County October 2014.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-04-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-04-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-04-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze holds his dog Freyja at his home in Salt Lake City October 8, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-05-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-05-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-05-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze plays with his dog Freyja at his home in Salt Lake City Oct 8, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-06-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-06-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-06-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze plays with his dog Freyja at his home in Salt Lake City Oct 8, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-07-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-07-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-07-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze works with  his dog Freyja at his home in Salt Lake City October 8, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                    <div class="gallery-image">
                        <div class="img">
                            <img
                                data-src="assets/galleries/nick-lotze/liberty-nick-lotze-08-sm.jpg"
                                data-src-thumb="assets/galleries/nick-lotze/liberty-nick-lotze-08-thumb.jpg"
                                data-src-large="assets/galleries/nick-lotze/liberty-nick-lotze-08-med.jpg"
                                >
                        </div>
                        <p class="caption gallery-caption">Veteran Nick Lotze walks his dog Freyja near his home in Salt Lake City Oct 8, 2014. A growing segment of veterans are battling PTSD with the aid of close friends: canines who center them, respond to them and sometimes lead them home.</p>
                    </div>
                        </div>
                    </div>
                    <p class="caption gallery-caption js-gallery-caption"></p>
                    <div class="gallery-index"></div>
                </div>
                <p>With hard work and consistency, there's progress. Veteran David Thimm credits Monty with building his patience and communication skills. The dog barked constantly when they started; now they can go almost anywhere.</p>

                <p>"He's far more receptive and perceptive than I would have ever thought," Thimm said. "He's just a little more aware around me when I start to get frustrated. When I get withdrawn, he's my little piece of momentum. When I'm done for the day, he keeps me going."</p>

                <p>"All species learn the same way," said Woodard. "We're trying to teach these guys to train their dogs in a regimented, science-based way and throw out a lot of popular psychology when it comes to dogs. It just so happens to be complementary to positive reinforcement training. Much of what we do with dogs comes straight out of psychological research done with human relationships, through BF Skinner. Dogs are a nonverbal species. Dogs do not understand the sounds that we make."</p>

                <p>Woodard and Gilbert-Norton say veterans tell them that learning to use positive reinforcement with a dog has improved interaction with their children.</p>

                <p>"We teach love and respect for animals, and that message carries across to all the relationships they have," Gilbert-Norton said.</p>

                <p>Spouses and children sometimes come to class. They build relationships with the animal and each other. If it was hard to figure out what to talk about when a parent came home from war, the dog is a bridge to the life they share.</p>

                <p>Sometimes emotions boil over. "We don't sit around and have group afterward, but those moments parallel moments at home, when the kids want to talk to you and you don't feel like doing anything," Woodard said. "Are you going to realize they're kids and have basic needs and make an appropriate decision, or are you going to succumb to frustration?"</p>

                <p>Todd Hooper believes that when he and Amber start a family, they'll have learned from Mowgli some of the parenting skills they need.</p>

                <p>At the prison, Brown and Widdison hope Liberty will earn her "bachelor's degree" so she can graduate to the next step and go home with Caleb. It will be bittersweet.</p>

                <div class="inline inline-sidebar inline-right inline-right-offset sidebar">
                    <h3>PTSD Resources</h3>
                    <div class="text">
                        <h3>PTSD or Veterans</h3>
                        <p><a href="http://www.vetcenter.va.gov">U.S. Department of Veteran Affairs</a></p>
                        <p><a href="http://www.va.gov/directory/guide/PTSD.asp">PTSD Veterans program locator</a></p>
                        <p>Crisis line: 911</p>
                        <p>Suicide Prevention Lifeline 1-800-273-8255, Espa&ntilde;ol: 1-888-628-9454</p>
                        <p class="continue"><span>Read more</span></p>
                        <div class="read-on">
                            <p><a href="http://veteranscrisisline.net/">Veterans Crisis Line</a>, 1-800-273-8255, press 1 (text 838255) or Confidential Veterans Chat with a counselor</p>
                            <p>Department of Defense's Defense Centers of Excellence (DCoE) 24/7 Outreach Center for Psychological Health &amp; Traumatic Brain Injury to find information and resources. Call 1-866-966-1020 or email resources@dcoeoutreach.org</p>
                            <p><a href="http://findtreatment.samhsa.gov/MHTreatmentLocator/faces/quickSearch.jspx">Mental health treatment facility locator (need not be military)</a></p>
                            <p><a href="http://maketheconnection.net/">Make the Connection</a></p>

                            <h3>Dogs</h3>

                            <p><a href="http://www.canineswithacause.com ">Canines With a Cause</a>, in Utah: 801-792-1737</p>
                            <p><a href="https://www.southernk9solutions.com/">Southern KI Solutions</a>: 706-231-3856</p>
                            <p><a href="http://www.vetshelpingheroes.org/">Vets Helping Heroes provides dogs for disabled veterans.</a></p>
                            <p><a href="http://www.guardiansofrescue.org">Guardians of Rescue</a></p>
                        </div>
                    </div>
                    <div class="scroll-indicator"></div>
                </div>
                <p>"I love waking up to her little voice," Widdison says. "She is so sweet." They hope they'll train other dogs.</p>

                <p>Christina Dunham believes Liberty already makes a difference.</p>

                <p>Caleb is already happier and more active. He takes long walks with Liberty. He plays a little and smiles a little. The dog doesn't question how he's handling the past that haunts him. Liberty just loves being around him, happily hanging at his feet. Christina believes Caleb gets the same sense from her that he got from his brothers in the field: He could tell them anything without fear of being judged.</p>

                <p>She thinks Liberty may help free him of war's aftermath. </p>
            </section>
        </div>
        <footer>
            <div class="body-text">
                <p><a href="/home/">Return to DeseretNews.com</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/about-us">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/policies#privacy">Privacy Policy</a></p>
                <p class="date">&copy; <?php echo date('Y'); ?> DeseretNews.com. All rights reserved.</p>
            </div>
        </footer>
        <script src="http://i.po.st/static/v3/post-widget.js?#publisherKey=ncbdu9sne6jl89f1o3np" type="text/javascript"></script>
    </body>
</html>
