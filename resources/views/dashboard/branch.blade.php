@extends('layouts.dashboard.dashboard_main.dashboard_main')
@section('content')
    <div class="content container">
        <div class="contenttWrapper">
            <h2>Edit Branch</h2>
            <form class="newForm" method="POST" action="{{ route('dashboard.updateBranch', $branchId) }}">
                @csrf
                @method('PUT')
                <div class="formGroup">
                    <label for="bType">Branch Type</label>
                    <select id="bType" class="form-select" name="branch_type" required>
                        <option value="">Select branch type</option>
                        <option value="Clinic" {{ isset($branchData['branch_type']) && $branchData['branch_type'] == 'Clinic' ? 'selected' : '' }}>Clinic</option>
                        <option value="Center" {{ isset($branchData['branch_type']) && $branchData['branch_type'] == 'Center' ? 'selected' : '' }}>Center</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="bName">Branch Name </label>
                    <input type="text" id="bName" class="inputField form-control" name="branch_name" value="{{ isset($branchData['branch_name']) ? $branchData['branch_name'] : '' }}" />
                </div>
                <div class="formGroup">
                    <label for="government">Government</label>
                    <select id="government" class="form-select" name="government">
                        <option value="Alexandria">Alexandria</option>
                        <option value="Aswan">Aswan</option>
                        <option value="Asyut">Asyut</option>
                        <option value="Beheira">Beheira</option>
                        <option value="Beni Suef">Beni Suef</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Dakahlia">Dakahlia</option>
                        <option value="Damietta">Damietta</option>
                        <option value="Faiyum">Faiyum</option>
                        <option value="Gharbia">Gharbia</option>
                        <option value="Giza">Giza</option>
                        <option value="Ismailia">Ismailia</option>
                        <option value="Kafr El Sheikh">Kafr El Sheikh</option>
                        <option value="Luxor">Luxor</option>
                        <option value="Matrouh">Matrouh</option>
                        <option value="Minya">Minya</option>
                        <option value="Monufia">Monufia</option>
                        <option value="New Valley">New Valley</option>
                        <option value="North Sinai">North Sinai</option>
                        <option value="Port Said">Port Said</option>
                        <option value="Qalyubia">Qalyubia</option>
                        <option value="Qena">Qena</option>
                        <option value="Red Sea">Red Sea</option>
                        <option value="Sharqia">Sharqia</option>
                        <option value="Sohag">Sohag</option>
                        <option value="South Sinai">South Sinai</option>
                        <option value="Suez">Suez</option>
                    </select>
                </div>
                <div class="formGroup">
                    <label for="city">City </label>
                    <input type="text" id="city" class="inputField form-control" name="city" value="{{ isset($branchData['city']) ? $branchData['city'] : '' }}" />
                </div>
                <div class="formGroup">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="inputField form-control" name="phone_number" value="{{ isset($branchData['phone_number']) ? $branchData['phone_number'] : '' }}"/>
                </div>
                <div class="formGroup">
                    <label for="comRegNum">Commercial Registration Number</label>
                    <input type="text" id="comRegNum" class="inputField form-control" name="commercial_registration_number" value="{{ isset($branchData['commercial_registration_number']) ? $branchData['commercial_registration_number'] : '' }}" />
                </div>
                <div class="formGroup">
                    <label for="taxID">Tax ID Number</label>
                    <input type="text" id="taxID" class="inputField form-control" name="tax_id_number" value="{{ isset($branchData['tax_id_number']) ? $branchData['tax_id_number'] : '' }}" />
                </div>
                <div class="formGroup">
                    <label for="creditCard">Credit Card Number</label>
                    <input type="text" id="creditCard" class="inputField form-control" name="credit_card_number" value="{{ isset($branchData['credit_card_number']) ? $branchData['credit_card_number'] : '' }}" />
                </div>
                <button type="submit" class="btn btn-primary submitBtn">Update</button>
            </form>
        </div>
    </div>
@endsection
