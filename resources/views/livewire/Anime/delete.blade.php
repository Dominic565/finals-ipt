@extends('base')
<div class="go">
   
    <div class="card shadow border border-light">
        <div class="card-header bg-secondary">
            <h5 class="text-white text-center mt-2">Delete Anime?</h5>
        </div>
        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-3 img-responsive center-block d-block mx-auto" style="width: 90px;">
            </div>
            <table class="table">
                <tr>
                    <th style="border-right: 1px solid rgba(118, 116, 116, 0.67)">
                        Author
                    </th>
                    <td>
                        {{ $this->anime->author }}
                    </td>
                </tr>
                <tr>
                    <th style="border-right: 1px solid rgba(118, 116, 116, 0.67)">
                        Email
                    </th>
                    <td>
                        {{ $this->anime->email }}
                    </td>
                </tr>
                <tr>
                    <th style="border-right: 1px solid rgba(118, 116, 116, 0.67)">
                        Description
                    </th>
                    <td>
                        {{ $this->anime->description }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-info mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>
<style>
    #shit{
         border-image-width: 20px;
    }
</style>

