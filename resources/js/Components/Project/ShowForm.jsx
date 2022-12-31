// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";

export default function ShowForm({ project }) {
    return (
        <Form>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="title">
                    {transData("form.project.title")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="title"
                    defaultValue={project.title}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="description">
                    {transData("form.project.description")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="description"
                    defaultValue={project.description}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="image">
                    {transData("form.project.image")}
                </Form.Label>
                {project.image ? (
                    <img
                        src={"/storage/image/" + project.image}
                        alt={project.title}
                        width={100}
                    />
                ) : (
                    <img
                        src={"/image/projects/project-1.jpg"}
                        alt={project.title}
                        width={100}
                    />
                )}
            </Form.Group>
            <Link
                href={route("project.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.project.back")}
            </Link>
        </Form>
    );
}
