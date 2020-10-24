@extends('layouts.checkout')
@section('title', 'checkout')

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item">
                  Details
                </li>
                <li class="breadcrumb-item active">
                  Checkout
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>Who Is Going?</h1>
              <p>Trip To Ubud, Bali, Indonesia</p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nasionality</td>
                      <td>Visa</td>
                      <td>Passport</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="./frontend/images/avatar-2.png" height="60">
                      </td>
                      <td class="align-middle">
                        Wiku Galindra Wardhana
                      </td>
                      <td class="align-middle">
                        CN
                      </td>
                      <td class="align-middle">
                        N/A
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="./frontend/images/ic_remove.png" alt="">
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="./frontend/images/avatar-2.png" height="60">
                      </td>
                      <td class="align-middle">
                        Wiku Galindra Wardhana
                      </td>
                      <td class="align-middle">
                        CN
                      </td>
                      <td class="align-middle">
                        N/A
                      </td>
                      <td class="align-middle">
                        Active
                      </td>
                      <td class="align-middle">
                        <a href="#">
                          <img src="./frontend/images/ic_remove.png" alt="">
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="member mt-3">
                <h2>Add Member</h2>
                <form action="" class="form-inline">
                  <label for="inputUsername" class="sr-only">Name</label>
                  <input name="inputUsername" type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                    placeholder="username">

                  <label for="inputVisa" class="sr-only">Visa</label>
                  <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                    <option value="VISA">VISA</option>
                    <option value="30 Days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>

                  <label for="doePassport" class="sr-only">DOE Passport</label>
                  <div class="input-group mr-sm-2">
                    <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                  </div>

                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                  </button>
                </form>
                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered in Nomads
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card card-details card-right">

              <h2>Checkout Information</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">2 Person</td>
                </tr>
                <tr>
                  <th width="50%">Additional VISA</th>
                  <td width="50%" class="text-right">$190.00</td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">$80.00 / person</td>
                </tr>
                <tr>
                  <th width="50%">SubTotal</th>
                  <td width="50%" class="text-right">$280.00</td>
                </tr>
                <tr>
                  <th width="50%">Total(+Unique)</th>
                  <td width="50%" class="text-right text-total">
                    <span class="text-blue">$279.</span>
                    <span class="text-orange">33</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Payment Instruction</h2>
              <p class="payment-instruction">
                Please complete your payment before to continue the wonderful trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="./frontend/images/ic_bank.png" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads</h3>
                    <p>
                      0881 8829 8800
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="./frontend/images/ic_bank.png" class="bank-image">
                  <div class="description">
                    <h3>PT Nomads</h3>
                    <p>
                      0881 8829 8800
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="join-container">
              <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">I have made payment</a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail') }}" class="text-muted">Cancel Booking</a>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>
@endsection

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
  <script>
    $(document).ready(function () {
      $('.datepicker').datepicker({
        uiLibrary: 'bootstrap',
        icons: {
          rightIcon: '<img src="{{url('frontend/images/ic_doe@2x.png')}}" alt="">'
        }
      });
    });
  </script>
@endpush
