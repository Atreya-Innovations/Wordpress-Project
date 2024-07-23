@extends('layouts.main_layout')

@section('title', 'NADI TARANGINI | ADD PATIENT')

@section('content')
<main>
    @component('layouts.page_header', ['title' => 'Add new patient'])
    @endcomponent
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-12 ht-480">
                <div class="container-fluid">
                    <div class="card mb-4">
                        <div class="card-header">Register a new patient with all details or anonymously</div>
                        <div class="card-body">
                            @component('patient.tabs', ['data' => $data])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('modal.condition_modal', [
        'modalId' => 'startNadiPatientModalCenter',
        'modalLabel' => 'startNadiPatientModalCenterTitle',
        'title' => 'Start nadi assessment?',
        'image' => asset('images/popup/start-nadi.gif'),
        'text' => 'Do you want to continue with the nadi assessment for this patient?',
        'modalBtnId' => 'startnadi',
        'cancel' => 'No',
        'success' => 'Yes',
        ]);
    @endcomponent
    @component('modal.consent_disclaimer_modal', [
        'modalId' => 'consentPopupModalCenter',
        'modalLabel' => 'consentPopupModalCenterTitle',
        'modalBtnId' => 'consent-disclaimer',
        ]);
    @endcomponent
    @component('modal.schedule_modal', [
        'modalId' => 'schedulePopupModalCenter',
        'modalLabel' => 'schedulePopupModalCenterTitle',
        'modalBtnId' => 'schedule',
        ]);
    @endcomponent
</main>
@endsection

@section('page-script')
<script src="{{ asset('js/addMember.js') }}"></script>
@endsection
