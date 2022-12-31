// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";

export default function ShowForm({ about }) {
    return (
        <Form>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="name">
                    {transData("form.about.name")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="name"
                    defaultValue={about.name}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="hobby">
                    {transData("form.about.hobby")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="hobby"
                    defaultValue={about.hobby}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="interest">
                    {transData("form.about.interest")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="interest"
                    defaultValue={about.interest}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="description">
                    {transData("form.about.description")}
                </Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="description"
                    defaultValue={about.description}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="mission">
                    {transData("form.about.mission")}
                </Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="mission"
                    defaultValue={about.mission}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="image">
                    {transData("form.about.image")}
                </Form.Label>
                {about.image ? (
                    <img
                        src={"/storage/image/" + about.image}
                        alt={about.title}
                        width={100}
                    />
                ) : (
                    <img
                        src={"/image/jumbotron/ayang.jpg"}
                        alt={about.title}
                        width={100}
                    />
                )}
            </Form.Group>
            <Link
                href={route("about.create")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.about.create")}
            </Link>
        </Form>
    );
}
