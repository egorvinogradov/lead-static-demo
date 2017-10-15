<?php include_once '../config.php' ?>

<div class="b-modal hidden" role="dialog" name="request">
  <div class="modal-backdrop fade in"></div>
  <div role="dialog" tabindex="-1" class="fade in modal">
    <div class="modal-lg modal-dialog">
      <div class="modal-content" role="document">
        <div class="modal-header">
          <h4>
            Let <span class="b-request-name">Joanna</span> know why you to want her to be your mentor:
          </h4>
        </div>
        <div class="modal-body">
          <div class="">
            <div class="form form-horizontal">
              <div class="form-group m-b-15">
                <label class="b-request-10 gray" for="template">
                  Message Template:
                </label>
                <div class="col-md-4">
                  <select class="form-control" id="template">
                    <option value="1">I want to get promoted</option>
                    <option value="1" selected>I need a career advice</option>
                    <option value="1">I am going to change my career</option>
                    <option value="1">I would like to start a business</option>
                    <option value="1">I need a relationship advice</option>
                    <option value="1">I have gender equality issues at work</option>
                    <option value="1">I am getting my first job after college</option>
                    <option value="1">Other</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <textarea draggable="false" placeholder="Your message to the mentor (optional)" class="form-control" rows="9">
Hi, Joanna!
My name is Jen and I'm a marketing manager at the Mobile Department.

After a few back and forths in my career, I've come to the understanding that I need a good career advice. So, I've been looking for people with a great experience such as yours.
Lead suggested that you might help with it. Would it be possible to request your mentorship on this? I would appreciate your help.

Thank you!
                  </textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <div class="pull-right">
                    <button class="btn btn-info btn-space b-request-submit">
                      Ask <span class="b-request-name">Joanna</span> to become your mentor
                    </button>
                    <button class="btn btn-default b-modal-close">Cancel</button>
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
