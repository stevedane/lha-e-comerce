@extends('layouts.app')
@section('content')

<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex">
                <h4 class="card-title"> all ligne</h4>
                <a  href="{{route('lignecommande.create')}}" class="btn btn-round btn-success mx-5">ajouter</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        id
                      </th>
                      <th>
                        produit
                      </th>
                      <th>
                        commande
                      </th>
                      <th>
                        Quantite
                      </th>
                      <th>
                        Prix Unitaire
                      </th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr></thead>
                    <tbody>
                    @foreach($lignes as $ligne)
                       <tr>
                         <td>
                         {{$ligne->id}}
                         </td>
                         <td>
                         {{$ligne->produit_id}}
                         </td>
                         <td>
                         {{$ligne->commande_ id}}
                         </td>
                         <td>
                         {{$ligne->quantite}}
                         </td>
                         <td>
                         {{$ligne->prix}} 
                         </td>
                         
                         <td class="text-right d-flex">
                        <a  href="{{route('lignecommande.show',$lignecommande->id)}}" class="btn btn-round btn-secondary">show</a>
                        <a  href="{{route('lignecommande.edit',$lignecommande->id)}}" class="btn btn-round btn-primary ">edit</a>
                        <form action="{{route('lignecommande.destroy',$lignecommande->id)}}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-round btn-danger">delete</button>
                        </form>

                       </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection