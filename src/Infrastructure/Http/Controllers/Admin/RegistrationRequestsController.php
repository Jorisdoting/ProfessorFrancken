<?php

declare(strict_types=1);

namespace Francken\Infrastructure\Http\Controllers\Admin;

use DateTimeImmutable;
use Francken\Application\Members\Registration\RequestStatus;
use Francken\Application\Members\Registration\RequestStatusRepository;
use Francken\Domain\Members\Registration\RegistrationRequestId;
use Francken\Infrastructure\Http\Controllers\Controller;

final class RegistrationRequestsController extends Controller
{
    private $requests;

    public function __construct(RequestStatusRepository $requests)
    {
        $this->requests = $requests;
    }


    public function index()
    {
        return view('admin.registration-requests.index', [
            'requests' => $this->requests->findAll()
        ]);
    }

    public function show(string $requestId)
    {
        return view('admin.registration-requests.show', [
            'request' => $this->requests->find(
                new RegistrationRequestId(
                    $requestId
                )
            )
        ]);
    }

    public function remove(string $requestId)
    {
        $id = new RegistrationRequestId($requestId);
        $request =$this->requests->find($id);

        $this->requests->remove($id);

        return redirect()->action('Admin\RegistrationRequestsController@index')
            ->with('status', 'Successfully archived request from ' . $request->requestee());
    }
}
