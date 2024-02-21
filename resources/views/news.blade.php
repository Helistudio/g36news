@extends("layouts.home")
@section("body_class")news-container @endsection
@section("content")
    <div class="row news-section">
        <div class="col-3">
            <div class="nav flex-column nav-pills news-tab" role="tablist" aria-orientation="vertical">
                <?php foreach($news as $index =>  $new):
                    $active_class = $index == 0 ? 'active' : '';
                ?>
                        <a class="nav-link title {{ $active_class }}" data-toggle="pill" href="#v-pills-{{ $index }}" role="tab">{{ $new->name }}</a>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content">
                <?php foreach($news as $index =>  $new):
                    $active_class = $index == 0 ? 'show active' : '';
                ?>
                    <div class="tab-pane description fade {{ $active_class }}" id="v-pills-{{ $index }}" role="tabpanel" >
                        <?php if($new->image != ''):?>
                            <img src ="{{ $new->image }}" alt=""/>
                        <?php endif;?>
                        <div>
                            <?php echo $new->description;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
@endsection