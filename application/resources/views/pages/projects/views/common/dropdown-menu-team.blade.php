<!--change category-->
@if($project->permission_edit_project)
<a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form" href="javascript:void(0)"
    data-toggle="modal" data-target="#actionsModal" data-modal-title="{{ cleanLang(__('lang.change_category')) }}"
    data-url="{{ url('/projects/change-category') }}"
    data-action-url="{{ urlResource('/projects/change-category?id='.$project->project_id.'&filter_category='.request('filter_category')) }}"
    data-loading-target="actionsModalBody" data-action-method="POST">
    {{ cleanLang(__('lang.change_category')) }}</a>
<!--change status-->
<a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form" href="javascript:void(0)"
    data-toggle="modal" data-target="#actionsModal" data-modal-title="{{ cleanLang(__('lang.change_status')) }}"
    data-url="{{ urlResource('/projects/'.$project->project_id.'/change-status') }}"
    data-action-url="{{ urlResource('/projects/'.$project->project_id.'/change-status?filter_category='.request('filter_category')) }}"
    data-loading-target="actionsModalBody" data-action-method="POST">
    {{ cleanLang(__('lang.change_status')) }}</a>

<!--update progress-->
<a class="dropdown-item actions-modal-button js-ajax-ux-request reset-target-modal-form" href="javascript:void(0)"
    data-toggle="modal" data-target="#actionsModal" data-modal-title="{{ cleanLang(__('lang.update_progress')) }}"
    data-url="{{ url('/projects/'.$project->project_id.'/progress?ref=list') }}"
    data-action-url="{{ url('/projects/'.$project->project_id.'/progress?ref=list&filter_category='.request('filter_category')) }}"
    data-loading-target="actionsModalBody" data-action-method="POST">
    {{ cleanLang(__('lang.update_progress')) }}</a>



<!--clone project-->
<!--@if(auth()->user()->role->role_projects > 1)-->

<!--@endif-->

<!--archive-->
<!--@if($project->project_active_state == 'active' && runtimeArchivingOptions())-->

<!--@endif-->

<!--activate-->
<!--@if($project->project_active_state == 'archived' && runtimeArchivingOptions())-->

<!--@endif-->




<!--automation-->
<!--<a href="javascript:void(0)" class="dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"-->
<!--    data-toggle="modal" data-target="#commonModal"-->
<!--    data-url="{{ urlResource('/projects/'.$project->project_id.'/edit-automation?ref=list') }}"-->
<!--    data-loading-target="commonModalBody" data-modal-title="@lang('lang.project_automation')"-->
<!--    data-action-url="{{ urlResource('/projects/'.$project->project_id.'/edit-automation?ref=list') }}"-->
<!--    data-action-method="POST" data-action-ajax-loading-target="commonModalBody">@lang('lang.automation')-->
<!--</a>-->

@else
<span class="small">--- no options avaiable</span>
@endif