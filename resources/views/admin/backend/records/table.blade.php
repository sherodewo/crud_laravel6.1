<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="table-datatables" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>ETC</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
</div>
<script type="text/javascript">
    $(function() {
        $('#table-datatables').DataTable({
            processing: true,
            serverSide: true,
            scrollX: true,
            responsive: true,
            ajax: '{!! route("record.datatables") !!}',
            columns: [
                { data: 'no', searchable: false, width: '5%', className: 'center'},
                { data: 'date', name: 'date' },
                { data: 'name', name: 'name' },
                { data: 'price', name: 'price' },
                { data: 'description', name: 'description' },
                { data: 'etc', name: 'etc' },
                { data: 'action', orderable: false, searchable: false, width: '15%', className: 'center action'},
            ]
        });
    });
</script>