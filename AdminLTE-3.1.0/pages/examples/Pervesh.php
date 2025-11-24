<!-- table section  -->
<div class="container-fluid pb-2">
  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm rounded-4 border-0">
        <div class="card-header table-title border-0 p-0">
          <div class="p-3 border-bottom border-white border-opacity-10">
            <i class="fas fa-table me-2"></i>
            <span class="fs-5 fw-semibold">Installation Status Details</span>
          </div>
          <ul class="nav nav-tabs border-0 px-3" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link tab-button active px-2 py-2" id="custom-tabs-four-district-tab" data-toggle="pill"
                href="#custom-tabs-four-district" role="tab"
                aria-controls="custom-tabs-four-district" aria-selected="true">District Wise
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-button px-2 py-2" id="custom-tabs-four-block-tab" data-toggle="pill"
                href="#custom-tabs-four-block" role="tab"
                aria-controls="custom-tabs-four-block" aria-selected="false">Block Wise
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-button px-2 py-2" id="custom-tabs-four-phase-tab" data-toggle="pill"
                href="#custom-tabs-four-phase" role="tab"
                aria-controls="custom-tabs-four-phase" aria-selected="false">Phase Wise
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tab-button px-2 py-2" id="custom-tabs-four-vendor-tab" data-toggle="pill"
                href="#custom-tabs-four-vendor" role="tab"
                aria-controls="custom-tabs-four-vendor" aria-selected="false">Vendor Wise
              </a>
            </li>
          </ul>


        </div>
      </div>
    </div>
  </div>
  <div class="card-body p-0">
    <div class="tab-content" id="custom-tabs-four-tabContent">
      <div class="tab-pane fade show active" id="custom-tabs-four-district" role="tabpanel"
        aria-labelledby="custom-tabs-four-district-tab">
        <div class="card mb-0">
          <div class="card-body">

            <div id="phase-content" class="tab-pane show active">
              <div class="table-responsive">
                <table id="example1" class="table modern-table table-hover text-center mb-0"
                  style="overflow-x: auto;">
                  <thead class="text-white">
                    <tr class="text-center">
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Sr. No.</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">District</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Total</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">WO Received</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">WO Pending</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Material Supplied</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Material Pending</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Material Inspection</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Material Inspection
                        Pending</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Installed</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Pending</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Installation Inspection
                      </th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">Installation Inspection
                        Pending</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">85% Bill Submmited
                      </th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">85% Bill Pending</th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">85% Payment Complete
                      </th>
                      <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">85% Payment Pending</th>
                      @for ($i = 1; $i <= 5; $i++)
                        <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">AMC
                        {{ $i }} Complete</th>
                        <th class="text-uppercase fw-normal py-3" style="text-wrap: nowrap;">AMC
                          {{ $i }} Pending
                        </th>
                        @endfor
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
                    <?php $number = 1; ?>
                    @foreach ($districts as $district)
                    <tr class="text-center">
                      <th>{{ $number }}</th>
                      <td style="text-wrap: nowrap;"><a href="{{asset('up/ssl-18w-district/total/'.$district->district)}}"
                          class="text-dark">{{ $district->district }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/total/'.$district->district)}}"
                          class="text-dark">{{ $district->total }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/wo-received/'.$district->district)}}"
                          class="text-dark">{{ $district->wo_received }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/wo-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->wo_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/material-supplied/'.$district->district)}}"
                          class="text-dark">{{ $district->material_supplied }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/material-supplied-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->material_supplied_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/material-inspection/'.$district->district)}}"
                          class="text-dark">{{ $district->material_inspection }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/material-inspection-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->material_inspection_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/installed/'.$district->district)}}"
                          class="text-dark">{{ $district->complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/pending/'.$district->district)}}"
                          class="text-dark">{{ $district->pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/installation-inspection/'.$district->district)}}"
                          class="text-dark">{{ $district->installation_inspection }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/installation-inspection-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->installation_inspection_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/bill-submit85/'.$district->district)}}"
                          class="text-dark">{{ $district->bill85_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/bill-submit85-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->bill85_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/payment-85/'.$district->district)}}"
                          class="text-dark">{{ $district->payment_85_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/payment-85-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->payment_85_pending }}</a>
                      </td>

                      <td><a href="{{asset('up/ssl-18w-district/amc1/'.$district->district)}}"
                          class="text-dark">{{ $district->amc1_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc1-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->amc1_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc2/'.$district->district)}}"
                          class="text-dark">{{ $district->amc2_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc2-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->amc2_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc3/'.$district->district)}}"
                          class="text-dark">{{ $district->amc3_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc3-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->amc3_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc4/'.$district->district)}}"
                          class="text-dark">{{ $district->amc4_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc4-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->amc4_pending }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc5/'.$district->district)}}"
                          class="text-dark">{{ $district->amc5_complete }}</a>
                      </td>
                      <td><a href="{{asset('up/ssl-18w-district/amc5-pending/'.$district->district)}}"
                          class="text-dark">{{ $district->amc5_pending }}</a>
                      </td>
                    </tr>
                    <?php $number++; ?>
                    @endforeach
                  </tbody>
                </table>


              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="custom-tabs-four-block" role="tabpanel"
        aria-labelledby="custom-tabs-four-block-tab">
        <div class="card mb-0">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped d-block  d-xxl-table"
              style="overflow-x: auto;">
              <thead>
                <tr class="text-center">
                  <th style="text-wrap: nowrap;">Sr. No.</th>
                  <th style="text-wrap: nowrap;">Block</th>
                  <th style="text-wrap: nowrap;">Total</th>
                  <th style="text-wrap: nowrap;">WO Received</th>
                  <th style="text-wrap: nowrap;">WO Pending</th>
                  <th style="text-wrap: nowrap;">Material Supplied</th>
                  <th style="text-wrap: nowrap;">Material Pending</th>
                  <th style="text-wrap: nowrap;">Material Inspection</th>
                  <th style="text-wrap: nowrap;">Material Inspection
                    Pending</th>
                  <th style="text-wrap: nowrap;">Installed</th>
                  <th style="text-wrap: nowrap;">Pending</th>
                  <th style="text-wrap: nowrap;">Installation Inspection
                  </th>
                  <th style="text-wrap: nowrap;">Installation Inspection
                    Pending</th>
                  <th style="text-wrap: nowrap;">85% Bill Submmited
                  </th>
                  <th style="text-wrap: nowrap;">85% Bill Pending</th>
                  <th style="text-wrap: nowrap;">85% Payment Complete
                  </th>
                  <th style="text-wrap: nowrap;">85% Payment Pending</th>
                  @for ($i = 1; $i <= 5; $i++)
                    <th style="text-wrap: nowrap;">AMC
                    {{ $i }} Complete</th>
                    <th style="text-wrap: nowrap;">AMC
                      {{ $i }} Pending
                    </th>
                    @endfor
                </tr>
              </thead>
              <tbody style="text-align: center;">
                <?php $number = 1; ?>
                @foreach ($blocks as $block)
                <tr class="text-center">
                  <th>{{ $number }}</th>
                  <td style="text-wrap: nowrap;"><a href="{{asset('up/ssl-18w-block/total/'.$block->block)}}"
                      class="text-dark">{{ $block->block }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/total/'.$block->block)}}"
                      class="text-dark">{{ $block->total }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/wo-received/'.$block->block)}}"
                      class="text-dark">{{ $block->wo_received }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/wo-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->wo_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/material-supplied/'.$block->block)}}"
                      class="text-dark">{{ $block->material_supplied }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/material-supplied-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->material_supplied_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/material-inspection/'.$block->block)}}"
                      class="text-dark">{{ $block->material_inspection }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/material-inspection-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->material_inspection_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/installed/'.$block->block)}}"
                      class="text-dark">{{ $block->complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/pending/'.$block->block)}}"
                      class="text-dark">{{ $block->pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/installation-inspection/'.$block->block)}}"
                      class="text-dark">{{ $block->installation_inspection }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/installation-inspection-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->installation_inspection_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/bill-submit85/'.$block->block)}}"
                      class="text-dark">{{ $block->bill85_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/bill-submit85-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->bill85_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/payment-85/'.$block->block)}}"
                      class="text-dark">{{ $block->payment_85_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/payment-85-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->payment_85_pending }}</a>
                  </td>

                  <td><a href="{{asset('up/ssl-18w-block/amc1/'.$block->block)}}"
                      class="text-dark">{{ $block->amc1_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc1-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->amc1_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc2/'.$block->block)}}"
                      class="text-dark">{{ $block->amc2_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc2-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->amc2_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc3/'.$block->block)}}"
                      class="text-dark">{{ $block->amc3_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc3-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->amc3_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc4/'.$block->block)}}"
                      class="text-dark">{{ $block->amc4_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc4-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->amc4_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc5/'.$block->block)}}"
                      class="text-dark">{{ $block->amc5_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-block/amc5-pending/'.$block->block)}}"
                      class="text-dark">{{ $block->amc5_pending }}</a>
                  </td>
                </tr>
                <?php $number++; ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="custom-tabs-four-phase" role="tabpanel"
        aria-labelledby="custom-tabs-four-phase-tab">
        <div class="card mb-0">
          <div class="card-body">
            <table id="example3" class="table table-bordered table-striped d-block d-xxl-table"
              style="overflow-x: auto;">
              <thead>
                <tr class="text-center">
                  <th style="text-wrap: nowrap;">Sr. No.</th>
                  <th style="text-wrap: nowrap;">Phase</th>
                  <th style="text-wrap: nowrap;">Total</th>
                  <th style="text-wrap: nowrap;">WO Received</th>
                  <th style="text-wrap: nowrap;">WO Pending</th>
                  <th style="text-wrap: nowrap;">Material Supplied</th>
                  <th style="text-wrap: nowrap;">Material Pending</th>
                  <th style="text-wrap: nowrap;">Material Inspection</th>
                  <th style="text-wrap: nowrap;">Material Inspection
                    Pending</th>
                  <th style="text-wrap: nowrap;">Installed</th>
                  <th style="text-wrap: nowrap;">Pending</th>
                  <th style="text-wrap: nowrap;">Installation Inspection
                  </th>
                  <th style="text-wrap: nowrap;">Installation Inspection
                    Pending</th>
                  <th style="text-wrap: nowrap;">85% Bill Submmited
                  </th>
                  <th style="text-wrap: nowrap;">85% Bill Pending</th>
                  <th style="text-wrap: nowrap;">85% Payment Complete
                  </th>
                  <th style="text-wrap: nowrap;">85% Payment Pending</th>
                  @for ($i = 1; $i <= 5; $i++)
                    <th style="text-wrap: nowrap;">AMC
                    {{ $i }} Complete</th>
                    <th style="text-wrap: nowrap;">AMC
                      {{ $i }} Pending
                    </th>
                    @endfor
                </tr>
              </thead>
              <tbody>
                <?php $number = 1; ?>
                @foreach ($phases as $phase)
                <tr class="text-center">
                  <th>{{ $number }}</th>
                  <td style="text-wrap: nowrap;"><a href="{{asset('up/ssl-18w-phase/total/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->phase }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/total/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->total }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/wo-received/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->wo_received }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/wo-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->wo_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/material-supplied/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->material_supplied }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/material-supplied-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->material_supplied_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/material-inspection/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->material_inspection }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/material-inspection-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->material_inspection_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/installed/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/installation-inspection/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->installation_inspection }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/installation-inspection-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->installation_inspection_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/bill-submit85/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->bill85_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/bill-submit85-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->bill85_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/payment-85/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->payment_85_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/payment-85-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->payment_85_pending }}</a>
                  </td>

                  <td><a href="{{asset('up/ssl-18w-phase/amc1/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc1_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc1-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc1_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc2/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc2_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc2-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc2_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc3/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc3_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc3-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc3_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc4/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc4_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc4-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc4_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc5/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc5_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-phase/amc5-pending/'.$phase->phase)}}"
                      class="text-dark">{{ $phase->amc5_pending }}</a>
                  </td>
                </tr>
                <?php $number++; ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="custom-tabs-four-vendor" role="tabpanel"
        aria-labelledby="custom-tabs-four-vendor-tab">
        <div class="card mb-0">
          <div class="card-body">
            <table id="example4" class="table table-bordered table-striped d-block d-xxl-table"
              style="overflow-x: auto;">
              <thead>
                <tr class="text-center">
                  <th style="text-wrap: nowrap;">Sr. No.</th>
                  <th style="text-wrap: nowrap;">Vendor</th>
                  <th style="text-wrap: nowrap;">Total</th>
                  <th style="text-wrap: nowrap;">WO Received</th>
                  <th style="text-wrap: nowrap;">WO Pending</th>
                  <th style="text-wrap: nowrap;">Material Supplied</th>
                  <th style="text-wrap: nowrap;">Material Pending</th>
                  <th style="text-wrap: nowrap;">Material Inspection</th>
                  <th style="text-wrap: nowrap;">Material Inspection
                    Pending</th>
                  <th style="text-wrap: nowrap;">Installed</th>
                  <th style="text-wrap: nowrap;">Pending</th>
                  <th style="text-wrap: nowrap;">Installation Inspection
                  </th>
                  <th style="text-wrap: nowrap;">Installation Inspection
                    Pending</th>
                  <th style="text-wrap: nowrap;">85% Bill Submmited
                  </th>
                  <th style="text-wrap: nowrap;">85% Bill Pending</th>
                  <th style="text-wrap: nowrap;">85% Payment Complete
                  </th>
                  <th style="text-wrap: nowrap;">85% Payment Pending</th>
                  @for ($i = 1; $i <= 5; $i++)
                    <th style="text-wrap: nowrap;">AMC
                    {{ $i }} Complete</th>
                    <th style="text-wrap: nowrap;">AMC
                      {{ $i }} Pending
                    </th>
                    @endfor
                </tr>
              </thead>
              <tbody>
                <?php $number = 1; ?>
                @foreach ($vendors as $vendor)
                <tr class="text-center">
                  <th>{{ $number }}</th>
                  @php
                  $vendorname = DB::table('vendors')->where('id',$vendor->inst_vendor)->first();
                  @endphp
                  <td style="text-wrap: nowrap;"><a href="{{asset('up/ssl-18w-vendor/total/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendorname->name ?? "NA" }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/total/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->total }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/wo-received/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->wo_received }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/wo-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->wo_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/material-supplied/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->material_supplied }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/material-supplied-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->material_supplied_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/material-inspection/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->material_inspection }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/material-inspection-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->material_inspection_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/installed/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/installation-inspection/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->installation_inspection }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/installation-inspection-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->installation_inspection_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/bill-submit85/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->bill85_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/bill-submit85-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->bill85_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/payment-85/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->payment_85_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/payment-85-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->payment_85_pending }}</a>
                  </td>

                  <td><a href="{{asset('up/ssl-18w-vendor/amc1/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc1_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc1-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc1_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc2/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc2_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc2-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc2_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc3/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc3_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc3-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc3_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc4/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc4_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc4-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc4_pending }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc5/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc5_complete }}</a>
                  </td>
                  <td><a href="{{asset('up/ssl-18w-vendor/amc5-pending/'.$vendor->inst_vendor)}}"
                      class="text-dark">{{ $vendor->amc5_pending }}</a>
                  </td>
                </tr>
                <?php $number++; ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- table section end  -->
