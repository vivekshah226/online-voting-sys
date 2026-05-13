<div class="row my-3">
    <div class="col-4">
        <h3>Add New Election</h3>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="election_topic" placeholder="Election Topic" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="number" name="number_of_candidates" placeholder="No of Candidates" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="text" onfocus="this.type='Date'" name="staring_date" placeholder="Starting Date" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="text" onfocus="this.type='Date'" name="ending_date"  placeholder="Ending Date" class="form-control" required />
            </div>
            <input type="submit" value="Add Election" name="addElectionBtn" class="btn btn-success" />
        </form>
    </div>

    <div class="col-8">
        <h3>Upcoming Elections</h3>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">S.No</th>
            <th scope="col">Election Name</th>
            <th scope="col"># Candidates</th>
            <th scope="col">Starting Date</th>
            <th scope="col">Ending Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    </div>
</div>    