<?php
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>

<div class="site-index">
    <div class="body-content">
        <div class="jumbotron">
            <h1>SweetAlert for Bootstrap</h1>
            <p>A beautiful replacement for JavaScript's "alert"</p>
            <p class="small">
                This is just a clone for Bootstrap of the original
                <a href="http://tristanedwards.me/sweetalert" target="_blank" onclick="_gaq.push(['_trackEvent', 'exit', 'header', 'Original']);">SweetAlert</a>.
            </p>
            <p>
                <a class="btn btn-lg" href="https://github.com/lipis/sweetalert" onclick="_gaq.push(['_trackEvent', 'exit', 'main', 'GitHub']);">
                    <span class="fa fa-github"></span>
                    View on GitHub
                </a>
            </p>

        </div>

        <div class="container">

            <h1>Try any of those!</h1>
            <div class="examples">
                <button class="btn btn-lg btn-primary sweet-10" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Primary']);">Primary</button>
                <button class="btn btn-lg btn-info sweet-11" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Info']);">Info</button>
                <button class="btn btn-lg btn-success sweet-12" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Success']);">Success</button>
                <button class="btn btn-lg btn-warning sweet-13" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Warning']);">Warning</button>
                <button class="btn btn-lg btn-danger sweet-14" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);">Danger</button>
            </div>


            <h2>Install via Bower</h2>

            <pre class="text-center lead">$ bower install bootstrap-sweetalert</pre>

            <p class="text-muted text-center lead">
                Continue playing with the examples or check how to use it on
                <a href="https://github.com/lipis/bootstrap-sweetalert#sweetalert-for-bootstrap">GitHub</a>.
            </p>

            <h2>Original Examples</h2>

            <h4>Basic example</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre class="code">swal("Here's a message!")</pre>
                </div>
            </div>

            <h4>A title with a text under</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>swal("Here's a message!", "It's pretty, isn't it?")</pre>
                </div>
            </div>

            <h4>A success message!</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>swal("Good job!", "You clicked the button!", "success")</pre>
                </div>
            </div>

            <h4>A warning message, with a function attached to the "Confirm" button...</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-4" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>
swal({
  title: "Are you sure?",
  text: "Your will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});</pre>
                </div>
            </div>

            <h4>...and by passing a parameter, you can execute something else for "Cancel".</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>
swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});</pre>
                </div>
            </div>

            <h4>A message with a custom icon</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-6" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Lipis']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>
swal({
  title: "Sweet!",
  text: "Here's a custom image.",
  imageUrl: 'thumbs-up.jpg'
});</pre>
                </div>
            </div>

            <h4>A replacement for the "prompt" function</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-7" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Lipis']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>
swal({
  title: "An input!",
  text: "Write something interesting:",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  inputPlaceholder: "Write something"
}, function (inputValue) {
  if (inputValue === false) return false;
  if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }
  swal("Nice!", "You wrote: " + inputValue, "success");
});</pre>
                </div>
            </div>

            <h4>With a loader (for a AJAX requests)</h4>
            <div class="row">
                <div class="col-sm-2 text-center">
                    <p><button class="btn btn-primary sweet-8" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Lipis']);">Try It</button></p>
                </div>
                <div class="col-sm-10">
                    <pre>
swal({
  title: "Ajax request example",
  text: "Submit to run ajax request",
  type: "info",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true
}, function () {
  setTimeout(function () {
    swal("Ajax request finished!");
  }, 2000);
});</pre>
                </div>
            </div>
        </div>

        <script>
            document.querySelector('.sweet-1').onclick = function(){
            swal("Here's a message!");
            };
            document.querySelector('.sweet-2').onclick = function(){
            swal("Here's a message!", "It's pretty, isn't it?")
            };
            document.querySelector('.sweet-3').onclick = function(){
            swal("Good job!", "You clicked the button!", "success");
            };
            document.querySelector('.sweet-4').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false,
                    //closeOnCancel: false
            },
                    function(){
                    swal("Deleted!", "Your imaginary file has been deleted!", "success");
                    });
            };
            document.querySelector('.sweet-5').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: "No, cancel plx!",
                    closeOnConfirm: false,
                    closeOnCancel: false
            },
                    function(isConfirm){
                    if (isConfirm){
                    swal("Deleted!", "Your imaginary file has been deleted!", "success");
                    } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                    });
            };
            document.querySelector('.sweet-6').onclick = function(){
            swal({
            title: "Sweet!",
                    text: "Here's a custom image.",
                    imageUrl: 'assets/thumbs-up.jpg'
            });
            };
            document.querySelector('.sweet-7').onclick = function () {
            swal({
            title: "An input!",
                    text: "Write something interesting:",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    inputPlaceholder: "Write something"
            }, function (inputValue) {
            if (inputValue === false) return false;
            if (inputValue === "") {
            swal.showInputError("You need to write something!");
            return false
            }
            swal("Nice!", "You wrote: " + inputValue, "success");
            });
            };
            document.querySelector('.sweet-8').onclick = function () {
            swal({
            title: "Ajax request example",
                    text: "Submit to run ajax request",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
            }, function () {
            setTimeout(function () {
            swal("Ajax request finished!");
            }, 2000);
            });
            };
            document.querySelector('.sweet-10').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-primary',
                    confirmButtonText: 'Primary!'
            });
            };
            document.querySelector('.sweet-11').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-info',
                    confirmButtonText: 'Info!'
            });
            };
            document.querySelector('.sweet-12').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-success',
                    confirmButtonText: 'Success!'
            });
            };
            document.querySelector('.sweet-13').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-warning',
                    confirmButtonText: 'Warning!'
            });
            };
            document.querySelector('.sweet-14').onclick = function(){
            swal({
            title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "error",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-danger',
                    confirmButtonText: 'Danger!'
            });
            };
        </script>
        <script>
            !function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); }}(document, 'script', 'twitter-wjs');
        </script>

    </div>
</div>
