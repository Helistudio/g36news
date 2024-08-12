@extends("layouts.home")
@section("body_class")gacha-history-container @endsection
@section("content")
    <div class="row gacha-history-section">
        <div class="col-12">
            <div class="table-1">
                <div class="title-wrapper">
                    <p class="gacha-detail-title">{{ __('messages.Lang104') }}</p>
                </div>
                <table>
                    <tr>
                        <td>{{ __('messages.Lang105') }}</td>
                        <td>35%</td>
                    </tr>
                    <tr>
                        <td>{{ __('messages.Lang106') }}</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>{{ __('messages.Lang107') }}</td>
                        <td>14%</td>
                    </tr>
                    <tr>
                        <td>{{ __('messages.Lang108') }}</td>
                        <td>1%</td>
                    </tr>
                    <tr>
                        <td>{{ __('messages.Lang109') }}</td>
                        <td>30%</td>
                    </tr>
                </table>
            </div>
            <div class="table-2">
                <div class="title-wrapper">
                    <p class="gacha-detail-title">{{ __('messages.Lang110') }}</p>
                </div>
                <div>
                    <table>
                        <tr>
                            <td>{{ __('messages.Lang111') }}</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang112') }}</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang113') }}</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang114') }}</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang115') }}</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang116') }}</td>
                            <td>3%</td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang117') }}</td>
                            <td>2%</td>
                        </tr>
                    </table>
                    <div>
                    </div>
                </div>
            </div>
@endsection
