<?php include_once 'config.php' ?>
<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title=> 'Find a Mentor']) ?>
<?php include_file('includes/sidebar', [tab => 'mentors']) ?>

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-lg-3 col-md-3  col-sm-12 col-xs-12">
            <div class="white b-filters" style="overflow: hidden; padding-bottom: 0px;">
              <form class="form-horizontal" _lpchecked="1">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="radio radio-info">
                      <input type="radio" name="mentors" id="specificcompany" value="1" checked>
                      <label class="b-filters-1" for="specificcompany">
                        My Company Only
                      </label>
                    </div>
                    <div class="radio radio-info">
                      <input type="radio" name="mentors" id="allmentors" value="0">
                      <label class="b-filters-1" for="allmentors">
                        All Mentors
                      </label>
                    </div>
                    <div class="lead-delimiter" style="margin-top: 15px;"></div>
                  </div>
                </div>
                <div class="form-group"><label class="col-md-12">Job title</label>
                  <div class="col-md-12">
                    <select multiple="" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                      <option value="Advisory Board Member">Advisory Board Member</option>
                      <option value="Amazon Web Services">Amazon Web Services</option>
                      <option value="Analyst">Analyst</option>
                      <option value="Co-Founder">Co-Founder</option>
                      <option value="Co-Founder&amp;CEO">Co-Founder&amp;CEO</option>
                      <option value="Co-Founder, CTO">Co-Founder, CTO</option>
                      <option value="Digital Marketing/Community Manager">Digital Marketing/Community Manager
                      </option>
                      <option value="Director of Product, Host &amp; Homes">Director of Product, Host &amp;
                        Homes
                      </option>
                      <option value="Founder and CEO">Founder and CEO</option>
                      <option value="Founder and Video Production Specialist">Founder and Video Production
                        Specialist
                      </option>
                      <option value="Girls in Tech, Inc.">Girls in Tech, Inc.</option>
                      <option value="Implementation Consultant">Implementation Consultant</option>
                      <option value="Jalydew">Jalydew</option>
                      <option value="Javascript Developer">Javascript Developer</option>
                      <option value="National Programs Director">National Programs Director</option>
                      <option value="Product Marketing Manager">Product Marketing Manager</option>
                      <option value="Product Tinkerer">Product Tinkerer</option>
                      <option value="Senior Product Manager">Senior Product Manager</option>
                      <option value="Social Impact Fellow, Investing in Women">Social Impact Fellow, Investing in
                        Women
                      </option>
                      <option value="Software Engineer">Software Engineer</option>
                      <option value="Student Intern">Student Intern</option>
                      <option value="Technical Project Manager">Technical Project Manager</option>
                      <option value="Twilio Inc.">Twilio Inc.</option>
                      <option value="Web Application Developer">Web Application Developer</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 271.359px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select..." style="width: 208.25px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div>
                </div>
                <div class="form-group"><label class="col-md-12">Industry</label>
                  <div class="col-md-12">
                    <select multiple="" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                      <option value="Capital Markets">Capital Markets</option>
                      <option value="Computer Software">Computer Software</option>
                      <option value="Consumer Goods">Consumer Goods</option>
                      <option value="Information Services">Information Services</option>
                      <option value="Information Technology &amp; Services">Information Technology &amp;
                        Services
                      </option>
                      <option value="Internet">Internet</option>
                      <option value="Marketing and Advertising">Marketing and Advertising</option>
                      <option value="Media Production">Media Production</option>
                      <option value="Non-Profit Organization Management">Non-Profit Organization Management
                      </option>
                      <option value="Venture Capital &amp; Private Equity">Venture Capital &amp; Private Equity
                      </option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 248.453px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select..." style="width: 208.25px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div>
                </div>
                <div class="form-group"><label class="col-md-12">Location</label>
                  <div class="col-md-12">
                    <input type="text" value="" placeholder="Enter city..." class="form-control"></div>
                </div>
                <div class="lead-delimiter" style="margin-top: 15px; margin-bottom: 15px;"></div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>
                      <div class="checkbox checkbox-info">
                        <input type="checkbox" id="radio1" value="on" checked>
                        <label for="radio1">Men</label>
                      </div>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label>
                      <div class="checkbox checkbox-info">
                        <input type="checkbox" id="radio2" value="on" checked>
                        <label for="radio2">Women</label>
                      </div>
                    </label>
                  </div>
                </div>
                <div class="lead-delimiter" style="margin-top: -10px; margin-bottom: 20px;"></div>
                <div class="form-group">
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info btn-block">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 b-mentors-card-7">
            <div class="row">



              <?php
                $items = get_json('mentors');
                foreach ($items as $item) { ?>

                <div>
                  <div class="col-md-12 col-sm-12">

                    <a href="/users/45/profile">
                      <!-- <?php echo $item->id ?> -->
                      <div>
                      <div class="panel panel-user-card null">
                        <div class="panel-heading b-mentors-card-8">
                          <div class="row">
                            <div class="col-md-4 col-lg-3 b-mentors-card-6">
                              <img class="thumb-lg img-user-card" alt="" src="<?php echo $item->picture_url ?>">
                            </div>
                            <div class="col-md-8 col-lg-9 text-left user-card-props">
                              <b style="font-size: 16px;">
                                <?php echo $item->first_name ?>
                                <?php echo $item->last_name ?>
                              </b>
                              <p style="font-weight: normal; text-transform: none;" class="b-mentors-card-9">
                                <?php echo join(' at ', [$item->job_title, $item->company_name]) ?>
                              </p>
                              <div class="b-mentors-card-10">
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
                            <p class="pull-right labels-top-right">
                              <a href="<?php echo $item->linkedin_profile_link ?>" target="_blank">
                                <i class="fa fa-linkedin-square linkedin-color"></i>
                              </a>
                              &nbsp;
                            </p>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div>
                            <div class="pull-right btn-bottom-right2" style="margin-right: 0px;">
                              <button class="btn btn-info">Ask to become your mentor</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>

              <?php } ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
