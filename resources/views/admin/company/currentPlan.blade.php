<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Plan Options') }}
        </h2>
    </x-slot>
    <style>
        body {
            font-family: "Arial", serif;
        }

        .assign-plan-options {}

        .assign-plan-options .assign-plans {
            border-radius: 10px;
            border: #ccc 1px solid;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .assign-plan-options h1 {
            text-align: center;
            font-size: 40px;
            font-weight: 600;
        }

        .assign-plan-options .assign-plan-heading {
            padding: 20px 28px;
            background: #37474F;
            border-radius: 10px 10px 0 0;
        }

        .assign-plan-options .assign-plan-heading h2 {
            padding: 0;
            margin: 0;
            color: #fff;
        }

        .assign-plan-options .assign-plan-row {
            padding: 10px 28px;
            display: grid;
            grid-template-columns: 50% 50%;
        }

        .assign-plan-options .assign-plan-row {}

        .assign-plan-options .assign-plan-row p {}

        .assign-plan-options .assign-plan-row select,
        .assign-plan-options .assign-plan-row input {
            border: #CACACA 1px solid;
            padding: 14px 20px;
            width: 100%;
            border-radius: 6px;
            box-shadow: #eee 3px 1px 15px;
            font-size: 15px;
            background: #fff;
        }


        input[type="checkbox"].toggle {
            opacity: 0;
            position: absolute;
            left: -99999px;
        }

        input[type="checkbox"].toggle+label {
            height: 40px;
            line-height: 40px;
            background-color: #ccc;
            padding: 0px 16px;
            border-radius: 16px;
            display: inline-block;
            position: relative;
            cursor: pointer;
            -moz-transition: all 0.25s ease-in;
            -o-transition: all 0.25s ease-in;
            -webkit-transition: all 0.25s ease-in;
            transition: all 0.25s ease-in;
            -moz-box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
            box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
        }

        input[type="checkbox"].toggle+label:before,
        input[type="checkbox"].toggle+label:hover:before {
            content: ' ';
            position: absolute;
            top: 2px;
            left: 2px;
            width: 46px;
            height: 36px;
            background: #fff;
            z-index: 2;
            -moz-transition: all 0.25s ease-in;
            -o-transition: all 0.25s ease-in;
            -webkit-transition: all 0.25s ease-in;
            transition: all 0.25s ease-in;
            -moz-border-radius: 14px;
            -webkit-border-radius: 14px;
            border-radius: 14px;
        }

        input[type="checkbox"].toggle+label .off,
        input[type="checkbox"].toggle+label .on {
            color: #fff;
        }

        input[type="checkbox"].toggle+label .off {
            margin-left: 46px;
            display: inline-block;
        }

        input[type="checkbox"].toggle+label .on {
            display: none;
        }

        input[type="checkbox"].toggle:checked+label .off {
            display: none;
        }

        input[type="checkbox"].toggle:checked+label .on {
            margin-right: 46px;
            display: inline-block;
        }

        input[type="checkbox"].toggle:checked+label,
        input[type="checkbox"].toggle:focus:checked+label {
            background-color: #67a5ec;
        }

        input[type="checkbox"].toggle:checked+label:before,
        input[type="checkbox"].toggle:checked+label:hover:before,
        input[type="checkbox"].toggle:focus:checked+label:before,
        input[type="checkbox"].toggle:focus:checked+label:hover:before {
            background-position: 0 0;
            top: 2px;
            left: 100%;
            margin-left: -48px;
        }
    </style>
    <form method="post" action="{{route('admin.company.plan.update')}}" id="plan_save">
        @csrf
        <input type="hidden" name="company_id" id="company_id" value="{{ $company_id }}" />
        <div class="assign-plan-options">
            <h1>Assign plan options</h1>
            <?php $i = 0 ?>
            @if (!empty($plan_lists))
            @foreach ($plan_lists as $plan_group)
            <div class="assign-plans">
                <div class="assign-plan-heading">
                    <h2>{{ $plan_group['name'] }}</h2>
                </div>
                @foreach ($plan_group['event_data'] as $list)
                <div class="assign-plan-row">
                    <div>
                        <p>{{ $list->name }}</p>
                    </div>
                    <div>
                        <div class="check-opt">
                            @php
                            $isChecked = false;
                            $eventData = null;
                            foreach ($plan_group['plan_data'] as $event) {
                            if ($list->id == $event->eventId) {
                            $isChecked = true;
                            $eventData = $event;
                            break;
                            }
                            }
                            @endphp
                            <div>
                                <div class="check-opt">
                                    <input type="hidden" name="company_plan[{{ $i }}][eventTitle]" value="{{ $eventData ? $eventData->eventTitle : '' }}" />
                                    <input type="hidden" name="company_plan[{{ $i }}][groupId]" value="{{ $eventData ? $eventData->groupId : '' }}" />
                                    <input type="hidden" name="company_plan[{{ $i }}][groupName]" value="{{ $eventData ? $eventData->groupName : '' }}" />
                                    <input type="hidden" name="company_plan[{{ $i }}][eventValue]" value="{{ $eventData ? $eventData->eventValue : '' }}" />
                                    <input type="hidden" name="company_plan[{{ $i }}][event]" value="{{ $eventData ? $eventData->event : '' }}" />
                                    <input type="checkbox" class="toggle" id="toggle{{ $list->id }}" name="company_plan[{{ $i }}][eventId]" value="{{ $list->id }}" {{ $isChecked ? 'checked' : '' }} />
                                    <x-admin.form.label for="toggle{{ $list->id}}">
                                        <span class="on">Yes</span>
                                        <span class="off">No</span>
                                    </x-admin.form.label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++ ?>
                @endforeach
            </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-12 text-end mt-2">
                <input type="submit" class="btn btn-success" value="Update" />
            </div>
        </div>
    </form>
</x-app-layout>