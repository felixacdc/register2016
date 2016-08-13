<div class="section">
    <div class="container">
        <div class="row">
            <div class="title-class col s6 offset-s3">
                <h3 class="center text_b wow bounceInLeft">Registro</h3>
                <hr style="border: .5px solid #2196f3;" class="scrollspy wow bounceInRight" id="registered">
            </div>
            <div class="col s12 wow fadeInDown">
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Semestre</th>
                            <th>Plan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($people as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->semester }}</td>
                                <td>{{ $value->plan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
