
    <div class="card mb-3">
      <img class="card-img-top" src="https://cdn.student.com/bundles/microapp-static-pages/images/public/about/about-us-hero-image-t.jpg" alt="Card image">
      <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informations about studens in the system.</p>
        
      
        <table class="table">
          <thead class="table-dark">
            <th>CNE</th>
            <th>FIRST NAME</th>
            <th>SECOND NAME</th>
            <th>AGE</th>
            <th>Speciality</th>
            <th>OPERATION</th>
          </thead>
          <tbody>
            @foreach($students as $student)
      
                  <tr>
                      <td>{{ $student->cne }}</td>
                      <td>{{ $student->firstName }}</td>
                      <td>{{ $student->secondName }}</td>
                      <td>{{ $student->age }}</td>
                      <td>{{ $student->speciality }}</td>
                      <td class="text-center">
                          
                          <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                          
                          
                      </td>
                  </tr>
      
            @endforeach
          </tbody>
        </table>
      </div>
    </div>



