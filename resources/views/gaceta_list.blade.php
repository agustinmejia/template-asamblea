<div class="row">
    @forelse ($publications as $item)
        <div class="col-lg-6" data-aos="fade-up">
            <div class="box" style="height: 400px !important">
                {{-- <span>56</span> --}}
                <div style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                    <h4>{{ $item->title }}</h4>
                </div>
                <div style="display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                    <p>{{ $item->description }}</p>
                </div>
                <br>
                @php
                    $months = ['', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
                @endphp
                <p>Promulgada el {{ date('d', strtotime($item->enact_date)) }} de {{ $months[intval(date('m', strtotime($item->enact_date)))] }} de {{ date('Y', strtotime($item->enact_date)) }} <br> <small>{{ Carbon\Carbon::parse($item->enact_date)->diffForHumans() }}</small></p>
                <hr>
                <div style="position: absolute; bottom: 10px; right: 30px">
                    @php
                        $url = '';
                        if($item->file){
                            $file = json_decode($item->file);
                            if(count($file)){
                                $url = $file[0]->download_link;
                            }
                        }
                    @endphp
                    @if ($url)
                        <a href="{{ url('storage/'.$url) }}" title="Descargar" target="_blank"><i class="bi bi-download"></i> Descargar</a>
                    @endif
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <h4 class="text-center">No hay resultados</h4>
        </div>
    @endforelse
</div>