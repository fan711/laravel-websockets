<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Real Time Web socket Broadcast Using Events - Readerstacks </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Laravel Real Time Web socket Broadcast Using Events - Readerstacks</h2>
        </div>
        <div class="panel-body">
            Logged In as  : {{@request()->username}}
            <div id="messages"></div>

            <form id="chatbox" action="{{url('send-notification')}}" >
                <div class="form-group">
                    <label>Message</label>
                    <input type="text" id='text' name="message" value="" class="form-control" />
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Send</button>
                </div>
            </form>


        </div>
    </div>
</div>
</body>
<script>


  $(function() {
    Echo.channel('my-notifications')
      .listen('SendNotification', (e) => {
        $("#messages").append("<br>"+JSON.stringify(e));
      });

    $("#chatbox").on("submit", function(e) {
      e.preventDefault();
      var action = $(this).attr("action");
      var message = $("#text").val();

      $.get(action+"?message="+message, function(data) {
        $("#text").val('');

      })

      return false;

    });

  });


</script>
</html>