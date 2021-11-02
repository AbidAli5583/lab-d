
        <h1 style="margin-left:50px">Mails</h1>
            <ul style="list-style-type:none;">
           <li class="list-group-item disabled"><b>Name:</b> {{$mail_data['name']}}</li>
          <li class="list-group-item"><b>Email:</b> {{$mail_data['email']}}</li>
         <li class="list-group-item"><b>Subject:</b> {{$mail_data['subject']}}</li>
        <li class="list-group-item"><br>Message: <br> <pre>{!!$mail_data['message']!!}</pre></li>
      </ul>
          