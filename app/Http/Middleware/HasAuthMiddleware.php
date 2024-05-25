<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Contract\Auth;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Exception\Auth\InvalidCustomToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;
use Kreait\Firebase\JWT\IdTokenVerifier;
use stdClass;
class HasAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $idToken = $request->session()->get('pearlUserToken');

        $projectId = "skincaredb-eb7c5";

        if (!$idToken) {
            return response()->json(['error' => 'Unauthorized from if'], 401);
        }

        if (!$this->isValidJwt($idToken)) {
            return response()->json(['error' => 'Unauthorized: Invalid token format'], 401);
        }

        try {
            $verifier = IdTokenVerifier::createWithProjectId($projectId);

            return $next($request);
        } catch (InvalidCustomToken $e) {
            Log::error('Invalid Firebase token: ' . $e->getMessage());
            return response()->json(['error' => 'Unauthorized: Invalid token'], 401);
        } catch (RevokedIdToken $e) {
            Log::error('Revoked Firebase token: ' . $e->getMessage());
            return response()->json(['error' => 'Unauthorized: Token revoked'], 401);
        } catch (FailedToVerifyToken $e) {
            Log::error('Failed to verify Firebase token: ' . $e->getMessage());
            return response()->json(['error' => 'Unauthorized: Failed to verify token'.$e->getMessage()], 401);
        } catch (\Exception $e) {
            Log::error('Unexpected error during Firebase token verification: ' . $e->getMessage());
            return response()->json(['error' => 'Unauthorized: An unexpected error occurred'], 401);
        }

    }


    private function isValidJwt($token)
    {
        $parts = explode('.', $token->toString());
        return count($parts) === 3;
    }
}
