use Auth;
use Iluminate\Routing\Controller;

class AuthController extends Controller {

    /**
     * HandLe an authentication attempt.
     * 
     * @return Response
     */
     public function authenticate()
     {
         if (Auth::attempt (['email' => $email, 'password' => $password]))
         {

            return redirect()->intended('dashboard');
           
        
}
     }
    }

    if (Auth::check())
    {

        // The user is logged in...
    }

    if (Auth::attempt(['email' => $email, 'password' => $password], $remember))
    {

        // The user is being <remembered class="The user is being remembered"></remembered>

    }

    if (Auth::viaRemember())
    {

        //
    }

    Auth::loginUsingId(1);

    if (Auth::validate($credentials))
    {

        //
    } 

    use Illuminate\Routing\Controller;
    use Illuminate\Contracts\Auth\Authenticatable;

    class ProfileController extends Controller {

        /**
        * Update the user ´s profile.
        *@return Response
        */
        public function updateProfile(Authenticatable $user){
            {
                //$user is an instance of the authenticated user...
            }
        }
    }

    public function handle($request, closure $next)
    {
        return Auth::onceBasic() $next($request);
    }

    RewriteCond %{HTTP: Authorization}  ^(,+)$_COOKIE
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    'github' => [
        'client_id' => 'your-github-app-id',
        'client_secret' => 'your-github-app-secret',
        'redirect' => 'http://your-callback-url',
        ],

        public function redirectToProvider()
        {
            return Socialize::with('github')->redirect();

        public function handleProviderCallback()
        {
            $user = Socialize::with('github') ->user();
            // $user ->token;
        }
        }


        return Socialize::with('github')->scopes(['scope1', 'scope2'])->redirect();


        