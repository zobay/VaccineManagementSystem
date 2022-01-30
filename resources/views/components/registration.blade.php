<div class="col-md-6 offset-2 mt-2">
    <form action="{{route('store-registration')}}">
        @csrf
       <div id="nid-part">
           <div class="form-group">
               <label for="nid">NID</label>
               <input type="number" class="form-control" name="nid" id="nid" placeholder="NID">
           </div>
           <div class="form-group">
               <label for="dob">Date of Birth</label>
               <input type="date" class="form-control" name="dob" id="dob" placeholder="dob">
           </div>
       </div>
    <div class="btn btn-primary" id="verify">Verify</div>

        <div id="details" hidden>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="center">Select Center</label>
                <select id="center" class="form-control" name="center_id">
                    @foreach($centers as $center)
                        <option value="{{$center->id}}">{{$center->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="phone">Mobile Number</label>
                <input type="number" class="form-control" name="phone">
            </div>
        </div>
        <button class="btn btn-primary" id="submit" hidden>Submit</button>
    </form>
</div>
