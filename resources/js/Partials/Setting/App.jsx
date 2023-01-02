// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

export default function App({ data }) {
    return (
        <>
            <div className="max-w-xl">
                <div className="flex flex-wrap">
                    <div className="w-1/2">App Name</div>
                    <div className="w-1/2">: {data.app_name}</div>
                </div>
                <div className="flex flex-wrap">
                    <div className="w-1/2">Meta Author</div>
                    <div className="w-1/2">: {data.meta_author}</div>
                </div>
                <div className="flex flex-wrap">
                    <div className="w-1/2">Meta Keywords</div>
                    <div className="w-1/2">: {data.meta_keywords}</div>
                </div>
                <div className="flex flex-wrap">
                    <div className="w-1/2">Meta Description</div>
                    <div className="w-1/2">: {data.meta_description}</div>
                </div>
            </div>
            <div className="flex justify-content-end">
                <Link
                    href={route("setting.create")}
                    as="button"
                    className="btn btn-primary"
                >
                    {transData("page.setting.edit")}
                </Link>
            </div>
        </>
    );
}
