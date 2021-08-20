<div>
    <div class="container" style="padding:30px 0;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sale Setting
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="updateSale">
                        <div class="form-group">
                            <lable class="col-md-4 control-label" wire:model="status">Status</lable>
                            <div class="col-md-4">
                                <select class="form-control">
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <lable class="col-md-4 control-label">Sale Date</lable>
                            <div class="col-md-4">
                                <input type="text" id="sale-date" placeholder="YYYY/MM/DD H:M:S" class="form-control input-md" wire:model="sale_date" />
                            </div>
                        </div>
                        <div class="form-group">
                            <lable class="col-md-4 control-label"></lable>
                            <div class="col-md-4">
                               <button type="submit" class="btn btn-primary" >Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function () {
            $('#sale-date').datetimepicker({
                format : 'Y-MM-DD h:m:s',
            })
            .on('dp.change',function(ev){
                var data = $('#sale-date').val();
                @this.set('sale_date',data);
            });
        })
    </script>
@endpush
