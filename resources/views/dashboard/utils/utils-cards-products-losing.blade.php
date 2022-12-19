
<div class="col-12 col-lg-9">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>PRODUTOS COM VENCIMENTO PARA HOJE</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Data de Vencimento</th>
                                    <th>Filial</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if($searchProducts)
                                    @foreach ($searchProducts as $searchProduct)
                                    <tr class="table-danger">
                                        <th class="text-bold-500">
                                            {{ $searchProduct->Nome}}
                                        </th>
                                        <td class="text-bold-500">
                                            {{ $searchProduct->validated_date->format('d/m/y') }}
                                        </td>
                                        <td class="text-bold-500">
                                            @if($searchProduct->Filial === 1)
                                            P&F
                                            @else
                                            A&E
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="card-footer clearfix">
                            <a href="{{ route('productsVal') }}" class="btn btn-primary float-right"><i class="bi bi-plus"></i> Adicionar Produto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>