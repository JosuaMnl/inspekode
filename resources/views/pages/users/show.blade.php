@extends('layouts.app')

@section('body')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <div class="d-flex mb-4">
                        <div class="avatar-wrapper rounded-circle overflow-hidden flex-shrink-0 me-4">
                            <img class="avatar" src="{{ asset('assets/images/avatar.png') }}" alt="Avatar User">
                        </div>
                        <div>
                            <div class="mb-4">
                                <div class="fs-2 fw-bold mb-1 lh-1 text-break">
                                    josuamnl
                                </div>
                                <div class="color-gray">
                                    Member since 1 year ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="text" id="current-url" class="d-none" value="{{ request()->url() }}">
                        <a id="share-profile" href="javascript:;" class="btn btn-primary me-4">Share</a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="mb-5">
                        <h2 class="mb-3">My Discussions</h2>
                        <div>
                            <div class="card card-discussions">
                                <div class="row">
                                    <div
                                        class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                        <div class="text-nowrap me-2 me-lg-0">
                                            3 likes
                                        </div>
                                        <div class="text-nowrap color-gray">
                                            9 answers
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <a href="">
                                            <h3>How to add a custom validation in laravel?</h3>
                                        </a>
                                        <p>I am working on a blogging application in Laravel 8. There are 4 user roles,
                                            among which,
                                            the "...</p>
                                        <div class="row">
                                            <div class="col me-1 me-lg-2">
                                                <a href="">
                                                    <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                                </a>
                                            </div>
                                            <div class="col-5 col-lg-4">
                                                <div class="avatar-sm-wrapper d-inline-block">
                                                    <a class="me-1" href="">
                                                        <img src="{{ asset('assets/images/avatar.png') }}" alt="Username"
                                                            class="avatar rounded-circle">
                                                    </a>
                                                </div>
                                                <span class="fs-12px">
                                                    <a class="me-1 fw-bold" href="">Username</a>
                                                    <span class="color-gray">7 hours ago</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-discussions">
                                <div class="row">
                                    <div
                                        class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                        <div class="text-nowrap me-2 me-lg-0">
                                            3 likes
                                        </div>
                                        <div class="text-nowrap color-gray">
                                            9 answers
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <a href="">
                                            <h3>How to add a custom validation in laravel?</h3>
                                        </a>
                                        <p>I am working on a blogging application in Laravel 8. There are 4 user roles,
                                            among which,
                                            the "...</p>
                                        <div class="row">
                                            <div class="col me-1 me-lg-2">
                                                <a href="">
                                                    <span class="badge rounded-pill text-bg-light">Eloquent</span>
                                                </a>
                                            </div>
                                            <div class="col-5 col-lg-4">
                                                <div class="avatar-sm-wrapper d-inline-block">
                                                    <a class="me-1" href="">
                                                        <img src="{{ asset('assets/images/avatar.png') }}" alt="Username"
                                                            class="avatar rounded-circle">
                                                    </a>
                                                </div>
                                                <span class="fs-12px">
                                                    <a class="me-1 fw-bold" href="">Username</a>
                                                    <span class="color-gray">7 hours ago</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-3">My Answers</h2>
                        <div class="card card-discussions">
                            <div class="row align-items-center">
                                <div class="col-2 col-lg-1 text-center">
                                    12
                                </div>
                                <div class="col">
                                    <span>Replied to </span>
                                    <span class="fw-bold text-primary">
                                        <a href="">How to add custom validation in Laravel?</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card card-discussions">
                            <div class="row align-items-center">
                                <div class="col-2 col-lg-1 text-center">
                                    12
                                </div>
                                <div class="col">
                                    <span>Replied to </span>
                                    <span class="fw-bold text-primary">
                                        <a href="">How to add custom validation in Laravel?</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-script')
    <script>
        $(document).ready(function() {
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
            const alert = (message, type) => {
                const wrapper = document.createElement('div')
                wrapper.innerHTML = [
                    `<div class="alert alert-${type} alert-dismissible fade show" role="alert">`,
                    `   <div>${message}</div>`,
                    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                    '</div>'
                ].join('')

                alertPlaceholder.append(wrapper)
            }
            $('#share-profile').click(function() {
                var copyText = $('#current-url');
                copyText[0].select();
                copyText[0].setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.val());
                alert('Link to this page copied successfully!', 'success')
            })
        })
    </script>
@endsection