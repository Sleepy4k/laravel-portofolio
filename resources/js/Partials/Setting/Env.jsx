export default function Env({ data }) {
    return (
        <div className="max-w-xl">
            <div className="flex flex-wrap">
                <div className="w-1/2">Php Version</div>
                <div className="w-1/2">: {data.php}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">Laravel Version</div>
                <div className="w-1/2">: {data.laravel}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">Debug Mode</div>
                <div className="w-1/2">: {data.debug ? "true" : "false"}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">App Timezone</div>
                <div className="w-1/2">: {data.timezone}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">App Locale</div>
                <div className="w-1/2">: {data.locale}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">App URL</div>
                <div className="w-1/2">: {data.url}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">App Environment</div>
                <div className="w-1/2">: {data.env}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">Cache Driver</div>
                <div className="w-1/2">: {data.cache}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">Session Driver</div>
                <div className="w-1/2">: {data.session}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">Database Driver</div>
                <div className="w-1/2">: {data.database}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">File System</div>
                <div className="w-1/2">: {data.filesystem}</div>
            </div>
            <div className="flex flex-wrap">
                <div className="w-1/2">Log Channel</div>
                <div className="w-1/2">: {data.log}</div>
            </div>
        </div>
    );
}
