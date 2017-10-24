<?php
include_once '../config.php';
$item = $include_data['user'];
?>


<div class="steamline">


  <?php if ( $item->mentorship_request_sent ) { ?>

    <div class="b-profile-request-feed-entry hidden">
      <div>
        <div class="sl-item">
          <div class="sl-left">
            <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
          </div>
          <div class="sl-right">
            <div class="m-l-40">
              <div><?php echo $item->first_name ?> became your mentor</div>
              <span class="sl-date">Just now</span>
              <div class="m-t-10 row">
                <div class="col-md-2 col-xs-12 b-profile-29" style="margin-top: 3px;">
                  <img src="/data/photos/users/00.jpg" alt="user" class="img-responsive">
                </div>
                <div class="col-md-9 col-xs-12 b-profile-30">
                  <a class="text-info" href="/my-profile">
                    <div><span>Kate Dalton</span></div>
                    <div>
                      Marketing Manager at Lyft
                    </div>
                    <div>
                      <span class="gray">Oakland, CA</span>
                    </div>
                  </a>
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
              <span class="sl-date">2 days ago</span>
              <blockquote class="m-t-10">
                I agree there will be a multitude of benefits to applying AI to marketing. <br><br>
                At the highest level, AI systems will reduce the amount of tedious, repetitive tasks that marketers have to do and free up their time to work on more creative, thought-provoking, valuable work.
              </blockquote>

              <div class="m-t-20 row b-profile-32">
                <img src="https://media.glassdoor.com/l/72/b6/53/2f/early-team-circa-2015.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
                <span>
                <p class="m-b-5">
                  <a href="https://www.forbes.com/sites/julianmitchell/2017/09/26/blueshift-the-tech-startup-using-a-i-to-shift-how-marketers-engage-consumers/?ss=sales-marketing" class="text-info">
                    Blueshift: The Tech Startup Using A.I. To Shift How Marketers Engage Consumers
                  </a>
                </p>
                Founded in 2014, Blueshift is an industry-leading marketing technology company that specializes in using artificial intelligence to help businesses implement audience-of-one targeting.
              </span>
              </div>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>

  <?php } ?>



  <div>
    <div>
      <div class="sl-item">
        <div class="sl-left">
          <img src="<?php echo $item->picture_url ?>" alt="user" class="img-circle">
        </div>
        <div class="sl-right">
          <div class="m-l-40">
            <div><?php echo $item->first_name ?> wrote an opinion</div>
            <span class="sl-date">Today at 12:30 pm</span>
            <blockquote class="m-t-10">
              Effective marketing means more than relying on direct mail advertising or television commercials. It has evolved into a multi-dimensional, multi-sensory process. Keep up with industry trends, as well as the new technology available to assist marketing efforts using these suggestions. <br><br> To identify which of your marketing efforts are working, it’s important that you capture data from different channels like phone, SMS, chat, email, and your website. At Tenfold, they’ve developed such tool that aggregates these data and presents it in a single unified view.<br><br> You can check out the various CRM integrations we offer here: <a href=#>https://www.tenfold.com/integrations</a>
            </blockquote>

            <div class="m-t-20 row b-profile-32">
              <img src="/data/photos/newsfeed/01.jpg" alt="user" class="col-md-3 col-xs-12 p-r-10 p-b-10">
              <span>
                <p class="m-b-5">
                  <a class="text-info"
                    href="http://www.prnewsonline.com/teamwork-how-pr-and-marketing-content-can-help-spur-sales/"
                    target="_blank">
                    Teamwork: How PR and Marketing Content Can Help Spur Sales
                  </a>
                </p>
                PR and marketing departments at B2B brands can reap benefits by providing busy sales teams with campaigns tailored to generate, encourage and cultivate prospects at every stage of the lengthy buying cycle.
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
            <div><?php echo $item->first_name ?> asked a question</div>
            <span class="sl-date">Yesterday at 2:12 pm</span>
            <p style="margin-top: 10px;">
              Why does Google accept some applicants rejected everywhere else?
            </p>
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
            <div><?php echo $item->first_name ?> became Della's mentor</div>
            <span class="sl-date">2 days ago</span>
            <div class="m-t-10 row">
              <div class="col-md-2 col-xs-12 b-profile-29" style="margin-top: 3px;">
                <img src="/data/photos/users/05.jpg" alt="user" class="img-responsive">
              </div>
              <div class="col-md-9 col-xs-12 b-profile-30">
                <a class="text-info" href="/users/50/profile">
                  <div><span>Della Duncan</span></div>
                  <div>
                    Digital Marketing Designer at Lyft
                  </div>
                  <div>
                    <span class="gray">San Francisco, CA</span>
                  </div>
                </a>
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
            <span class="sl-date">2 days ago</span>
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
            <span class="sl-date">3 days ago</span>
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
            <span class="sl-date">3 days ago</span>
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
            <span class="sl-date">3 days ago</span>
            <blockquote style="margin-top: 10px;">I can’t speak for Google — but I was accepted
              for a job at Facebook after being turned down by roughly a dozen other companies
              (ranging from Google, where I didn’t even make it past the phone screen, to a
              variety of startups) over a one year period, during which I convinced myself I was a
              total professional failure and doomed loser.
            </blockquote>
            <div class="m-t-20 row b-profile-32">
              <img src="https://blogs-images.forbes.com/lorenfeldman/files/2017/09/Rick-in-East-Workroom-1200x675.jpg?width=960" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
              <span>
                <p class="m-b-5">
                  <a href="https://www.forbes.com/sites/lorenfeldman/2017/09/25/todays-must-reads-for-entrepreneurs-were-still-in-a-startup-funk/?ss=sales-marketing" class="text-info">
                    Must-Reads For Entrepreneurs: A Small Business Fights A Big Bank, Unicorns-To-Be, The Startup Funk
                  </a>
                </p>
                A business owner who has been fighting his bank for seven years may finally get his day in court: "For years, LaDouceur had managed All About Drapes, a custom drape maker in the Chicago suburbs with 14 employees.
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
            <span class="sl-date">3 days ago</span>
            <blockquote style="margin-top: 10px;">Finally Seattle became my new home. In its
              solitude, I found and chatted with a most beautiful person near San Francisco on a
              dating site. I made small talk with her and asked her on a date; she jokingly agreed
              because it was so unlikely.
            </blockquote>

            <div class="m-t-20 row b-profile-32">
              <img src="/image/news/end-of-retail-main.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
              <span>
                <p class="m-b-5">
                  <a href="https://www.ama.org/publications/MarketingNews/Pages/end-retail-as-we-know-it-how-can-marketers-adapt.aspx" class="text-info">
                    It’s the End of Retail As We Know It: How Can Marketers Adapt?
                  </a>
                </p>
                The rise of mobile devices has ensured retail will never be the same. Companies must deliver a new customer experience or risk falling into the retail chasm.
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
            <span class="sl-date">3 days ago</span>
            <blockquote style="margin-top: 10px;">That year after a decade, rejection finally
              pushed me too far. I bought a one way ticket and travelled 22 countries to get away
              from my past. Many interesting women became my friends along the way. And I wondered
              "why doesn't this happen at home?"
            </blockquote>

            <div class="m-t-20 row b-profile-32">
              <img src="https://media.glassdoor.com/l/72/b6/53/2f/early-team-circa-2015.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
              <span>
                <p class="m-b-5">
                  <a href="https://www.forbes.com/sites/julianmitchell/2017/09/26/blueshift-the-tech-startup-using-a-i-to-shift-how-marketers-engage-consumers/?ss=sales-marketing" class="text-info">
                    Blueshift: The Tech Startup Using A.I. To Shift How Marketers Engage Consumers
                  </a>
                </p>
                Founded in 2014, Blueshift is an industry-leading marketing technology company that specializes in using artificial intelligence to help businesses implement audience-of-one targeting.
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
            <span class="sl-date">3 days ago</span>
            <blockquote style="margin-top: 10px;">Also, a candidate who is a great fit for Google
              may not be a great fit at some other technical companies.
            </blockquote>

            <div class="m-t-20 row b-profile-32">
              <img src="https://blogs-images.forbes.com/gabrielshaoolian/files/2017/07/forbes-header-image.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
              <span>
                <p class="m-b-5">
                  <a href="https://www.forbes.com/sites/gabrielshaoolian/2017/07/26/localized-digital-marketing-how-brands-like-airbnb-and-wework-are-leading-the-way/?ss=sales-marketing" class="text-info">
                    Localized Digital Marketing: How Brands Like Airbnb And WeWork Are Leading The Way
                  </a>
                </p>
                Local businesses are some of the slowest to adapt to digital technologies and digital marketing strategies.
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
            <span class="sl-date">3 days ago</span>
            <blockquote style="margin-top: 10px;">Interviewing at Google is also like that. A
              candidate may succeed because he/she prepares a lot more for Google than other
              company interviews, happened to get lucky by being asked questions right inside
              their area of expertise, happened to connect really well with the interviewers that
              day, is especially adept at the type of interview questions that Google asks, etc.
            </blockquote>

            <div class="m-t-20 row b-profile-32">
              <img src="http://cdn.prnewsonline.com/wp-content/uploads/2017/08/hands-teamwork-540x304.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
              <span>
                <p class="m-b-5">
                  <a href="http://www.prnewsonline.com/teamwork-how-pr-and-marketing-content-can-help-spur-sales/" class="text-info">
                    Teamwork: How PR and Marketing Content Can Help Spur Sales
                  </a>
                </p>
                PR and marketing departments at B2B brands can reap benefits by providing busy sales teams with campaigns tailored to generate, encourage and cultivate prospects at every stage of the lengthy buying cycle.
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
            <span class="sl-date">3 days ago</span>
            <blockquote style="margin-top: 10px;">There is always a bit of random luck involved in
              these things. I knew of people in my High School who got into pretty good
              Universities such as Stanfurd but got rejected from other good (but not as good)
              Universities such as Michigan. These things happen from time to time because the
              process is a little bit subjective.
            </blockquote>

            <div class="m-t-20 row b-profile-32">
              <img src="http://cdn.prnewsonline.com/wp-content/uploads/2017/09/shutterstock_316477829-540x304.jpg" alt="user" class="col-md-3 col-xs-12" style="padding-right: 10px; padding-bottom: 10px;">
              <span>
                <p class="m-b-5">
                  <a href="http://www.prnewsonline.com/3-ways-augmented-intelligence-will-help-pr-pros/" class="text-info">
                    3 Ways Augmented Intelligence Will Help PR Pros</a></p>As you know, there’s a debate about artificial intelligence and what it might do to jobs. For PR and marketing pros, the discussion is about augmented, not artificial, intelligence. And it has little to do with job displacement.
              </span>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
</div>
