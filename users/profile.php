<?php include_once '../config.php' ?>

<?php
$user_id = $include_data['user_id'];
$item = get_json('mentors')[$user_id];
?>


<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title => 'Profile']) ?>
<?php include_file('includes/sidebar', [tab => 'mentors']) ?>


<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="white-box">
          <div class="row">
            <div class="col-md-3 user-left">
              <img class="img-responsive " alt="User image" src="<?php echo $item->picture_url ?>">
              <div class="user-mentors">Mentors</div>
              <div>
                <div class="opinion-images">
                  <?php echo output_opinion_images([7,8,9,10,11], 'more', 'and') ?>
                </div>
              </div>
              <div class="user-mentees">Mentees</div>
              <div>
                <div class="opinion-images">
                  <?php echo output_opinion_images([3,4,5,15,18], 'more', 'and') ?>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <p class="pull-right labels-top-right" style="top: 0px; right: 5px;">
                <a href="https://www.linkedin.com/in/joannabrinjak/" target="_blank">
                  <i class="fa fa-linkedin-square linkedin-color"></i>
                </a>
                &nbsp;
              </p>
              <div>
                <div style="margin-left: 10px;">
                  <b style="font-size: 16px; text-transform: uppercase;">
                    <?php echo $item->first_name ?>
                    <?php echo $item->last_name ?>
                  </b>
                  <p style="font-weight: normal; text-transform: none;" class="b-mentors-card-9">
                    <?php echo join(' at ', [$item->job_title, $item->company_name]) ?>
                  </p>
                  <div class="b-mentors-card-10 b-profile-9">
                    <table class="table-props">
                      <tbody>
                      <tr>
                        <td><span class="gray"><i class="fa fa-folder-open"></i></span></td>
                        <td><span class="gray">Industry:</span></td>
                        <td class="text-left">
                          <?php echo $item->industry ?>
                        </td>
                      </tr>
                      <tr>
                        <td><span class="gray"><i class="fa fa-location-arrow"></i></span></td>
                        <td><span class="gray">Location:</span></td>
                        <td class="text-left">
                          <?php echo $item->location->name ?>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <?php if (0) { ?>

                <div style="margin-left: 10px;">
                  <div class="">
                    <hr>
                    <div class="row ">
                      <div class="col-md-12 b-profile-10">
                        <b>
                          <span>
                            Your overall mentorship experience with <?php echo $item->first_name ?>
                          </span>
                        </b>
                      </div>
                      <div class="col-md-4">
                        <div class="row b-profile-11" style="margin-top: 5px;">
                          <div class="col-md-12">
                            <p style="margin-top: 10px;" class="b-profile-13">
                              <?php echo $item->first_name ?> is:
                            </p>
                          </div>
                          <div>
                            <div class="col-md-5">Helpful</div>
                            <div class="col-md-7">
                              <div>
                                <i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="col-md-5">Accessible</div>
                            <div class="col-md-7">
                              <div>
                                <i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star rating-star-disabled"></i>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="col-md-5">Friendly</div>
                            <div class="col-md-7">
                              <div>
                                <i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center rating-overall-box b-profile-14">
                        <b class="b-profile-15" style="text-transform: uppercase; font-size: 14px; margin-top: 10px;">Overall score</b>
                        <h3 class="b-profile-16" style="font-size: 22px; font-weight: 400;">93%</h3>
                        <p class="text-primary b-profile-17" style="margin: 0px;">Fantastic</p></div>
                    </div>
                  </div>
                </div>


                <div style="margin-left: 10px;" class="b-profile-18">
                  <div>
                    <br>
                    <div class="">
                      <div class="row rating-select-bg">
                        <div class="col-md-12 b-profile-19">
                          <b><span>Please rate your mentorship experience for the past week (Sep 25 — Oct 1)</span></b>
                        </div>
                        <div class="col-md-5">
                          <div class="row b-profile-20" style="margin-top: 5px;">
                            <div class="col-md-12">
                              <p>Last week,
                                <?php echo $item->first_name ?> was:
                              </p>
                            </div>
                            <div>
                              <div class="col-md-4">Helpful</div>
                              <div class="col-md-8">
                                <div>
                                  <i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="col-md-4">Accessible</div>
                              <div class="col-md-8">
                                <div>
                                  <i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i>
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="col-md-4">Friendly</div>
                              <div class="col-md-8">
                                <div>
                                  <i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <button class="b-profile-21 btn btn-info pull-right" style="margin-top: 60px;">Submit Your Rating</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>



              <div class="col-md-12 col-xs-12">
                <div class="white-box b-profile-22">
                  <ul class="nav nav-tabs tabs customtab">
                    <li class="active tab">
                      <a data-toggle="tab">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Activity</span>
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="home">
                      <div class="steamline">
                        <div></div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> asked a question</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <p style="margin-top: 10px;">Why does Google accept some applicants rejected
                                    everywhere else?</p></div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> became Jen's mentor</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <div class="m-t-20 row">
                                    <div class="col-md-2 col-xs-12 b-profile-29" style="margin-top: 3px;">
                                      <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/1/005/017/3d5/013ff3c.jpg" alt="user" class="img-responsive">
                                    </div>
                                    <div class="col-md-9 col-xs-12 b-profile-30">
                                      <a class="text-info" href="/users/35/">
                                        <div><span>Jen Picard</span></div>
                                        <div>
                                          Senior Product Manager at LoopUp
                                        </div>
                                        <div>
                                          <span class="gray">San Francisco Bay Area</span>
                                        </div>
                                      </a>
                                      <a href="#" class="btn btn-info user-ask-btn"> Ask to become your mentor</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">I've recently realized that my immaturity has
                                    caused me to lose out on many important career opportunities and relationships.
                                    Furthermore, my lack of discipline prevented me from cultivating any useful skills
                                    I've started like fluency in a second language or any interesting hobbies like
                                    diving.
                                  </blockquote>
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://venturebeat.com/wp-content/uploads/2016/04/pitch-meeting-e1506362374127.jpg?fit=578%2C393&amp;strip=all" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
                                    <span>
                                      <p class="m-b-5">
                                        <a href="https://venturebeat.com/2017/09/25/ai-solutions-are-only-as-effective-as-their-kpis/" class="text-info">
                                          AI solutions are only as effective as their KPIs
                                        </a>
                                      </p>
                                      Fueled by the exponential proliferation of big data, advances in AI have grown with unprecedented speed over the past decade. Programming AI is no longer an arduous process of building it line by line.
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">Consider it from a Bayesian perspective. If the
                                    false negative were really high, like 99%, then this would be the case of Google
                                    being the one place where the candidate got lucky. If the false negative rate were
                                    very low, then this would be a matter of Google accepting other company's rejects.
                                  </blockquote>
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://venturebeat.com/wp-content/uploads/2017/08/untitled-design27.jpg?fit=578%2C409&amp;strip=all" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
                                    <span>
                                      <p class="m-b-5">
                                        <a href="https://venturebeat.com/2017/09/21/vc-data-looks-at-why-companies-buy-ai-startups/" class="text-info">
                                          VC data looks at why companies buy AI startups
                                        </a>
                                      </p>
                                      The recent acquisition of Blue River Technology by John Deere is an artificial intelligence deal at its best. It shows the impact AI can have across various industries, as well as the scale of that impact.
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">Google gets millions of applications for a
                                    relatively small number of jobs. There will necessarily be a lot of false positives.
                                    Just like any other company with an overwhelming number of applicants.
                                  </blockquote>
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://venturebeat.com/wp-content/uploads/2017/09/untitled-design6.jpg?fit=578%2C409&amp;strip=all" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
                                    <span>
                                      <p class="m-b-5">
                                        <a href="https://venturebeat.com/2017/09/23/study-startups-that-dont-set-firm-goals-actually-do-better/" class="text-info">
                                          Study: Startups that don’t set firm goals actually do better
                                        </a>
                                      </p>
                                      New data, from a study done by my team at Bunch, could redefine what we see as the trademark characteristics of early startup success. Our study collected data from 62 early-stage startups over the course of a year to find the factors that correlate.
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">I can’t speak for Google — but I was accepted
                                    for a job at Facebook after being turned down by roughly a dozen other companies
                                    (ranging from Google, where I didn’t even make it past the phone screen, to a
                                    variety of startups) over a one year period, during which I convinced myself I was a
                                    total professional failure and doomed loser.
                                  </blockquote>
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://blogs-images.forbes.com/lorenfeldman/files/2017/09/Rick-in-East-Workroom-1200x675.jpg?width=960" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;"><span><p class="m-b-5">
                                    <a href="https://www.forbes.com/sites/lorenfeldman/2017/09/25/todays-must-reads-for-entrepreneurs-were-still-in-a-startup-funk/?ss=sales-marketing" class="text-info">
                                      Must-Reads
                                      For Entrepreneurs: A Small Business Fights A Big Bank, Unicorns-To-Be, The Startup
                                      Funk</a></p>A business owner who has been fighting his bank for seven years may finally get his day in court: "For years, LaDouceur had managed All About Drapes, a custom drape maker in the Chicago suburbs with 14 employees.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">Finally Seattle became my new home. In its
                                    solitude, I found and chatted with a most beautiful person near San Francisco on a
                                    dating site. I made small talk with her and asked her on a date; she jokingly agreed
                                    because it was so unlikely.
                                  </blockquote>
                                  
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://www.ama.org/PublishingImages/end-of-retail-main.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
                                    <span>
                                      <p class="m-b-5">
                                    <a href="https://www.ama.org/publications/MarketingNews/Pages/end-retail-as-we-know-it-how-can-marketers-adapt.aspx" class="text-info">
                                      It’s the End
                                      of Retail As We Know It: How Can Marketers Adapt?</a></p>
                                      The rise of mobile devices has ensured retail will never be the same. Companies must deliver a new customer experience or risk falling into the retail chasm.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">That year after a decade, rejection finally
                                    pushed me too far. I bought a one way ticket and travelled 22 countries to get away
                                    from my past. Many interesting women became my friends along the way. And I wondered
                                    "why doesn't this happen at home?"
                                  </blockquote>
                                  
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://media.glassdoor.com/l/72/b6/53/2f/early-team-circa-2015.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;"><span>
                                      <p class="m-b-5">
                                    <a href="https://www.forbes.com/sites/julianmitchell/2017/09/26/blueshift-the-tech-startup-using-a-i-to-shift-how-marketers-engage-consumers/?ss=sales-marketing" class="text-info">
                                      Blueshift:
                                      The Tech Startup Using A.I. To Shift How Marketers Engage Consumers
                                    </a></p>Founded in 2014, Blueshift is an industry-leading marketing technology company that specializes in using artificial intelligence to help businesses implement audience-of-one targeting.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">Also, a candidate who is a great fit for Google
                                    may not be a great fit at some other technical companies.
                                  </blockquote>
                                  
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="https://blogs-images.forbes.com/gabrielshaoolian/files/2017/07/forbes-header-image.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;"><span><p class="m-b-5">
                                    <a href="https://www.forbes.com/sites/gabrielshaoolian/2017/07/26/localized-digital-marketing-how-brands-like-airbnb-and-wework-are-leading-the-way/?ss=sales-marketing" class="text-info">
                                      Localized
                                      Digital Marketing: How Brands Like Airbnb And WeWork Are Leading The Way
                                    </a></p>Local businesses are some of the slowest to adapt to digital technologies and digital marketing strategies.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">Interviewing at Google is also like that. A
                                    candidate may succeed because he/she prepares a lot more for Google than other
                                    company interviews, happened to get lucky by being asked questions right inside
                                    their area of expertise, happened to connect really well with the interviewers that
                                    day, is especially adept at the type of interview questions that Google asks, etc.
                                  </blockquote>
                                  
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="http://cdn.prnewsonline.com/wp-content/uploads/2017/08/hands-teamwork-540x304.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;"><span><p class="m-b-5">
                                    <a href="http://www.prnewsonline.com/teamwork-how-pr-and-marketing-content-can-help-spur-sales/" class="text-info">
                                      Teamwork: How
                                      PR and Marketing Content Can Help Spur Sales</a></p>PR and marketing departments at B2B brands can reap benefits by providing busy sales teams with campaigns tailored to generate, encourage and cultivate prospects at every stage of the lengthy buying cycle.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">There is always a bit of random luck involved in
                                    these things. I knew of people in my High School who got into pretty good
                                    Universities such as Stanfurd but got rejected from other good (but not as good)
                                    Universities such as Michigan. These things happen from time to time because the
                                    process is a little bit subjective.
                                  </blockquote>
                                  
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="http://cdn.prnewsonline.com/wp-content/uploads/2017/09/shutterstock_316477829-540x304.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;"><span><p class="m-b-5">
                                    <a href="http://www.prnewsonline.com/3-ways-augmented-intelligence-will-help-pr-pros/" class="text-info">
                                      3 Ways
                                      Augmented Intelligence Will Help PR Pros</a></p>As you know, there’s a debate about artificial intelligence and what it might do to jobs.
For PR and marketing pros, the discussion is about augmented, not artificial, intelligence. And it has little to do with job displacement.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                        <div>
                          <div>
                            <div class="sl-item">
                              <div class="sl-left">
                                <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
                              </div>
                              <div class="sl-right">
                                <div class="m-l-40">
                                  <div><?php echo $item->first_name ?> wrote a comment</div>
                                  <span class="sl-date">5 minutes ago</span>
                                  <blockquote style="margin-top: 10px;">In other words: What are the reasons for
                                    companies to reject a previous intern/employee from Google?
                                    I previously interned at Google and talked to many people there. Some people (both
                                    interns &amp; official employees) got rejected everywhere else except for Google. I
                                    think I'm experiencing the same thing for now.
                                    Any ideas why this is the case?
                                  </blockquote>
                                  
                                  <div class="m-t-20 row b-profile-32">
                                    <img src="http://cdn.prnewsonline.com/wp-content/uploads/2017/08/crisis.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;"><span><p class="m-b-5">
                                    <a href="http://www.prnewsonline.com/how-to-know-if-youre-pr-crisis-material/" class="text-info">
                                      How to Know
                                      if You’re Public Relations Crisis Material</a></p>Being part of a team handling a major PR crisis can be an exciting departure from the humdrum of many assignments. But crisis management also has its downsides.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
