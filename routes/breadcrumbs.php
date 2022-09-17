<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
//========================[Dashboard]========================//
//Dashboard
Breadcrumbs::for('dashboard-overview-1', function ($trail) {
    $trail->push('Dashboard', route('dashboard-overview-1'));
});

//========================[FPPP]========================//
//Fppp Index
Breadcrumbs::for('fppps.index', function ($trail) {
    $trail->push('FPPP Index', route('fppps.index'));
});
//Fppp Create
Breadcrumbs::for('fppps.create', function ($trail) {
    $trail->parent('fppps.index');
    $trail->push('Create', route('fppps.create'));
});
//Fppp Show
Breadcrumbs::for('fppps.show', function ($trail, $fppp) {
    $trail->parent('fppps.index');
    $trail->push($fppp->fppp_no, route('fppps.show', $fppp->id));
});
//Fppp Edit
Breadcrumbs::for('fppps.edit', function ($trail, $fppp) {
    $trail->parent('fppps.index');
    $trail->push($fppp->fppp_no, route('fppps.show', $fppp->id));
    $trail->push('Edit', route('fppps.edit', $fppp->id));
});

//========================[Quotation]========================//
//Quotation Index
Breadcrumbs::for('quotation.index', function ($trail) {
    $trail->push('Quotation Index', route('quotation.index'));
});
//Quotation Create
Breadcrumbs::for('quotation.create', function ($trail) {
    $trail->parent('quotation.index');
    $trail->push('Create', route('quotation.create'));
});
//Quotation Show
Breadcrumbs::for('quotation.show', function ($trail, $quotation) {
    $trail->parent('quotation.index');
    $trail->push($quotation->no_quotation, route('quotation.show', $quotation->id));
});
//Quotation Edit
Breadcrumbs::for('quotation.edit', function ($trail, $quotation) {
    $trail->parent('quotation.index');
    $trail->push($quotation->no_quotation, route('quotation.show', $quotation->id));
    $trail->push('Edit', route('quotation.edit', $quotation->id));
});

//========================[Contacts ]========================//
//Contact Index
Breadcrumbs::for('contacts.index', function ($trail) {
    $trail->push('Contact Index', route('contacts.index'));
});
//Contact Create
Breadcrumbs::for('contacts.create', function ($trail) {
    $trail->parent('contacts.index');
    $trail->push('Create', route('contacts.create'));
});
//Contact Show
Breadcrumbs::for('contacts.show', function ($trail, $contact) {
    $trail->parent('contacts.index');
    $trail->push($contact->name, route('contacts.show', $contact->id));
});
//Contact Edit
Breadcrumbs::for('contacts.edit', function ($trail, $contact) {
    $trail->parent('contacts.index');
    $trail->push($contact->name, route('contacts.show', $contact->id));
    $trail->push('Edit', route('contacts.edit', $contact->id));
});

//========================[Contact Types ]========================//
//Contact Types Index
Breadcrumbs::for('contact_types.index', function ($trail) {
    $trail->push('Contact Types Index', route('contact_types.index'));
});
//Contact Types Create
Breadcrumbs::for('contact_types.create', function ($trail) {
    $trail->parent('contact_types.index');
    $trail->push('Create', route('contact_types.create'));
});
//Contact Types Show
Breadcrumbs::for('contact_types.show', function ($trail, $contact_type) {
    $trail->parent('contact_types.index');
    $trail->push($contact_type->name, route('contact_types.show', $contact_type->id));
});
//Contact Types Edit
Breadcrumbs::for('contact_types.edit', function ($trail, $contact_type) {
    $trail->parent('contact_types.index');
    $trail->push($contact_type->name, route('contact_types.show', $contact_type->id));
    $trail->push('Edit', route('contact_types.edit', $contact_type->id));
});

//========================[Company Types ]========================//
//Company Types Index
Breadcrumbs::for('company_types.index', function ($trail) {
    $trail->push('Company Types Index', route('company_types.index'));
});
//Company Types Create
Breadcrumbs::for('company_types.create', function ($trail) {
    $trail->parent('company_types.index');
    $trail->push('Create', route('company_types.create'));
});
//Company Types Show
Breadcrumbs::for('company_types.show', function ($trail, $company_type) {
    $trail->parent('company_types.index');
    $trail->push($company_type->name, route('company_types.show', $company_type->id));
});
//Company Types Edit
Breadcrumbs::for('company_types.edit', function ($trail, $company_type) {
    $trail->parent('company_types.index');
    $trail->push($company_type->name, route('company_types.show', $company_type->id));
    $trail->push('Edit', route('company_types.edit', $company_type->id));
});

//========================[Company ]========================//
//Company Index
Breadcrumbs::for('companies.index', function ($trail) {
    $trail->push('Company Index', route('companies.index'));
});
//Company Create
Breadcrumbs::for('companies.create', function ($trail) {
    $trail->parent('companies.index');
    $trail->push('Create', route('companies.create'));
});
//Company Show
Breadcrumbs::for('companies.show', function ($trail, $company) {
    $trail->parent('companies.index');
    $trail->push($company->name, route('companies.show', $company->id));
});
//Company Edit
Breadcrumbs::for('companies.edit', function ($trail, $company) {
    $trail->parent('companies.index');
    $trail->push($company->name, route('companies.show', $company->id));
    $trail->push('Edit', route('companies.edit', $company->id));
});

//========================[Company Area ]========================//
//Company Area Index
Breadcrumbs::for('company_areas.index', function ($trail) {
    $trail->push('Company Area Index', route('company_areas.index'));
});
//Company Area Create
Breadcrumbs::for('company_areas.create', function ($trail) {
    $trail->parent('company_areas.index');
    $trail->push('Create', route('company_areas.create'));
});
//Company Area Show
Breadcrumbs::for('company_areas.show', function ($trail, $company_area) {
    $trail->parent('company_areas.index');
    $trail->push($company_area->name, route('company_areas.show', $company_area->id));
});
//Company Area Edit
Breadcrumbs::for('company_areas.edit', function ($trail, $company_area) {
    $trail->parent('company_areas.index');
    $trail->push($company_area->name, route('company_areas.show', $company_area->id));
    $trail->push('Edit', route('company_areas.edit', $company_area->id));
});

//========================[Deal Source]========================//
//Deal Source Index
Breadcrumbs::for('deal_sources.index', function ($trail) {
    $trail->push('Deal Source Index', route('deal_sources.index'));
});
//Deal Source Create
Breadcrumbs::for('deal_sources.create', function ($trail) {
    $trail->parent('deal_sources.index');
    $trail->push('Create', route('deal_sources.create'));
});
//Deal Source Show
Breadcrumbs::for('deal_sources.show', function ($trail, $deal_source) {
    $trail->parent('deal_sources.index');
    $trail->push($deal_source->name, route('deal_sources.show', $deal_source->id));
});
//Deal Source Edit
Breadcrumbs::for('deal_sources.edit', function ($trail, $deal_source) {
    $trail->parent('deal_sources.index');
    $trail->push($deal_source->name, route('deal_sources.show', $deal_source->id));
    $trail->push('Edit', route('deal_sources.edit', $deal_source->id));
});

//========================[Lead Source]========================//
//Lead Source Index
Breadcrumbs::for('leadsources.index', function ($trail) {
    $trail->push('Lead Source Index', route('leadsources.index'));
});
//Lead Source Create
Breadcrumbs::for('leadsources.create', function ($trail) {
    $trail->parent('leadsources.index');
    $trail->push('Create', route('leadsources.create'));
});
//Lead Source Show
Breadcrumbs::for('leadsources.show', function ($trail, $leadsource) {
    $trail->parent('leadsources.index');
    $trail->push($leadsource->name, route('leadsources.show', $leadsource->id));
});
//Lead Source Edit
Breadcrumbs::for('leadsources.edit', function ($trail, $leadsource) {
    $trail->parent('leadsources.index');
    $trail->push($leadsource->name, route('leadsources.show', $leadsource->id));
    $trail->push('Edit', route('leadsources.edit', $leadsource->id));
});

//========================[Status]========================//
//Status Index
Breadcrumbs::for('status.index', function ($trail) {
    $trail->push('Status Index', route('status.index'));
});
//Status Create
Breadcrumbs::for('status.create', function ($trail) {
    $trail->parent('status.index');
    $trail->push('Create', route('status.create'));
});
//Status Show
Breadcrumbs::for('status.show', function ($trail, $status) {
    $trail->parent('status.index');
    $trail->push($status->name, route('status.show', $status->id));
});
//Status Edit
Breadcrumbs::for('status.edit', function ($trail, $status) {
    $trail->parent('status.index');
    $trail->push($status->name, route('status.show', $status->id));
    $trail->push('Edit', route('status.edit', $status->id));
});

//========================[Lead Status]========================//
//Lead Status Index
Breadcrumbs::for('leadstatuses.index', function ($trail) {
    $trail->push('Lead Status Index', route('leadstatuses.index'));
});
//Lead Status Create
Breadcrumbs::for('leadstatuses.create', function ($trail) {
    $trail->parent('leadstatuses.index');
    $trail->push('Create', route('leadstatuses.create'));
});
//Lead Status Show
Breadcrumbs::for('leadstatuses.show', function ($trail, $leadstatus) {
    $trail->parent('leadstatuses.index');
    $trail->push($leadstatus->name, route('leadstatuses.show', $leadstatus->id));
});
//Lead Status Edit
Breadcrumbs::for('leadstatuses.edit', function ($trail, $leadstatus) {
    $trail->parent('leadstatuses.index');
    $trail->push($leadstatus->name, route('leadstatuses.show', $leadstatus->id));
    $trail->push('Edit', route('leadstatuses.edit', $leadstatus->id));
});

//========================[Lead Priorities]========================//
//Lead Priorities Index
Breadcrumbs::for('leadpriorities.index', function ($trail) {
    $trail->push('Lead Priorities Index', route('leadpriorities.index'));
});
//Lead Priorities Create
Breadcrumbs::for('leadpriorities.create', function ($trail) {
    $trail->parent('leadpriorities.index');
    $trail->push('Create', route('leadpriorities.create'));
});
//Lead Priorities Show
Breadcrumbs::for('leadpriorities.show', function ($trail, $leadpriority) {
    $trail->parent('leadpriorities.index');
    $trail->push($leadpriority->name, route('leadpriorities.show', $leadpriority->id));
});
//Lead Priorities Edit
Breadcrumbs::for('leadpriorities.edit', function ($trail, $leadpriority) {
    $trail->parent('leadpriorities.index');
    $trail->push($leadpriority->name, route('leadpriorities.show', $leadpriority->id));
    $trail->push('Edit', route('leadpriorities.edit', $leadpriority->id));
});

//========================[Account]========================//
Breadcrumbs::for('account.profile', function ($trail, User $account) {
    $trail->push('Account', route('account.profile', $account));
});

Breadcrumbs::for('account.personal-information', function ($trail, User $account) {
    $trail->parent('account.profile', $account);
    $trail->push('Personal Information', route('account.personal-information', $account));
});

Breadcrumbs::for('account.profile.edit', function ($trail, User $account) {
    $trail->parent('account.profile', $account);
    $trail->push('Change Password', route('account.profile.edit', $account));
});

//========================[Activity]========================//
//Activity Index
Breadcrumbs::for('activities.index', function ($trail) {
    $trail->push('Activity Index', route('activities.index'));
});
//Activity Create
Breadcrumbs::for('activities.create', function ($trail) {
    $trail->parent('activities.index');
    $trail->push('Create', route('activities.create'));
});
//Activity Show
Breadcrumbs::for('activities.show', function ($trail, $activity) {
    $trail->parent('activities.index');
    $trail->push($activity->name, route('activities.show', $activity->id));
});
//Activity Edit
Breadcrumbs::for('activities.edit', function ($trail, $activity) {
    $trail->parent('activities.index');
    $trail->push($activity->name, route('activities.show', $activity->id));
    $trail->push('Edit', route('activities.edit', $activity->id));
});